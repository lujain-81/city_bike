<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Vehicle;
use App\Models\Spot;
use App\Models\Rental;
use App\Models\VehicleRental;
use App\Models\Availability;
use Hash;
use Cart;
use DB;

class CartController extends Controller
{
    public function index(Request $request)
    {
        $items = Cart::content();
        return view('user.pages.cart', compact('items'));
    }

    public function add(Vehicle $vehicle)
    {
        $found = false;
        foreach(Cart::content() as $row) {
            if($row->id == $vehicle->VehicleID){
                $found = true;
            }
        }
        if($found == false) {
            Cart::add(['id' => $vehicle->VehicleID, 'name' => $vehicle->Model, 'qty' => 1, 'price' => $vehicle->Price, 'options' => ['code' => $vehicle->CodNumber, 'image' =>  url($vehicle->Image)]]);
        }
        return back()->withFlashMessage('Bike add successfully to the order.');
//        return redirect(route('user.checkout.index'))->withFlashMessage('Bike add successfully to the order.');
    }

    public function checkout(Request $request)
    {
        // Validation
        $data = $request->validate([
            'TimeFrom'  => 'required|date_format:H:i',
            'TimeTo'    => 'required|date_format:H:i|after:TimeFrom',
            'WithHelmet'    => 'nullable',
            'date'          => 'required',
            'cvv'           => 'required',
            'card_name'     => 'required',
            'card_number'   => 'required',
            'expire_month'  => 'required',
            'expire_year'   => 'required',
        ]);
        // Check if Time Avaliable
        $inDate = $request->date . ' ' . $request->TimeFrom . ':00';
        $from_time = strtotime($inDate); 
        $to_time = strtotime($request->date . ' ' . $request->TimeTo . ':00'); 
        $df = round(abs($from_time - $to_time) / 60,2);

        $df = $df/60;

        DB::beginTransaction();

        try {
            $rental = Rental::create([
                'CustomerID'        => auth('customers')->id(),
                'Date'              => $data['date'],
                'TimeFrom'          => $data['TimeFrom'],
                'TimeTo'            => $data['TimeTo'],
                'FullDateTimeFrom'  => $request->date . ' ' . $request->TimeFrom . ':00',
                'FullDateTimeTo'    => $request->date . ' ' . $request->TimeTo . ':00',
                'WithHelmet'        => isset($data['WithHelmet']) ? 1 : 0,
                'Deposit'           => ($df * Cart::subtotal()),
                'Amount'            => ($df * Cart::subtotal()),
                'Status'            => 'active',
                'RentalDateTime'    => now()
            ]);
            foreach (Cart::content() as $key => $value) {
                $exists = Rental::whereHas('vehicles', function($q) use($value, $inDate){
                    return $q->where('vehicle.VehicleID', $value->id);
                })->where('FullDateTimeFrom', '<=', $inDate)->where('FullDateTimeTo', '>=', $inDate)->count();
                if($exists){
                    DB::rollback();
                    return redirect()->back()->withInput($request->except('_token'))->withErrors(['date' => [$value->name . '\'s time that you are selected is Unavaliable.']]);
                }
                VehicleRental::create([
                    'RentalID'  => $rental->RentalID,
                    'VehicleID' => $value->id,
                ]);
                Availability::create([
                    'DateTime'  => now(),
                    'VehicleID' => $value->id,
                    'Status'    => 'active',
                ]);
            }

            // Generate Invice
            $rental->payment()->create([
                'CVV'           => $data['cvv'],
                'CardNumber'    => $data['card_number'],
                'ExpireDate'    => $data['expire_month'] . '-' . $data['expire_year'],
                'Amount'        => $rental->Amount,
                'Block'         => '0',
                'PaymentStatus' => 'accepted',
            ]);
            $rental->invoice()->create([
                'DateTime'      => now(),
                'TotalAmount'   => $rental->Amount,
                'TotalAfterTax' => $rental->Amount,
            ]);

            DB::commit();
            // all good
            Cart::destroy();
            return redirect(route('user.account.rentals'))->withFlashMessage('You have registered succefully.');

        } catch (\Exception $e) {
            DB::rollback();
            \Log::info($e);
            return redirect()->back()->withInput($request->except('_token'))->withErrors(['date' => ['Something Went Wrong']]);
        }

    }

    public function remove($row)
    {
        Cart::remove($row);
        return redirect()->back();
    }

}

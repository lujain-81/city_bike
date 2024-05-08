<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Vehicle;
use App\Models\Spot;
use App\Models\Rental;
use App\Models\VehicleRental;
use App\Models\ContactUs;
use Hash;

class AccountController extends Controller
{   
    public function index()
    {
        $auth = auth('customers')->user();
        return view('user.account.index', compact('auth'));    
    }

    public function update(Request $request)
    {
        $auth = auth('customers')->user();
        $data = $request->validate([
            'Name'  => 'required|string|min:2|max:194',
            'Email' => 'required|email|unique:customer,Email,' . $auth->CustomerID . ',CustomerID',
            'Password' => 'nullable|string|min:6',
            'Phone'     => 'required|numeric|unique:customer,Phone,' . $auth->CustomerID . ',CustomerID',
            'NationalID'     => 'required|numeric|unique:customer,NationalID,' . $auth->CustomerID . ',CustomerID',
        ]);
        if (@$data['Password'] && @$data['Password'] != '') {
            $data['Password'] = Hash::make($data['Password']);
        } else {
            unset($data['Password']);
        }
        return redirect()->back()->withFlashMessage(trans('panel.action_success'));
    }

    public function rentals()
    {
        $auth = auth('customers')->user();
        $items = $auth->rentals()->latest('RentalID')->get();
        return view('user.account.rentals', compact('auth', 'items'));    
    }

    public function rental(Rental $rental)
    {
        $auth = auth('customers')->user();
        if($rental->CustomerID != $auth->CustomerID){
            abort(404);
        }
        $item = $rental;
        return view('user.account.rental', compact('auth', 'item'));    
    }

    public function cancel(Rental $rental, Request $request)
    {
        $auth = auth('customers')->user();
        if($rental->CustomerID != $auth->CustomerID){
            abort(404);
        }
        $rental->update(['Status' => 'cancelled']);
        $rental->canecllation()->create([
            'Reasons'   => $request->reason,
            'DateTime'  => now()
        ]);
        $item = $rental;
        return redirect()->back()->withFlashMessage(trans('panel.action_success'));   
    }

    public function review(Rental $rental, Request $request)
    {
        $auth = auth('customers')->user();
        $auth->feedback()->create([
            'AdminID'   => 1,
            'Rate'      => $request->rate,
            'Comment'   => $request->comment
        ]);
        return redirect()->back()->withFlashMessage(trans('panel.action_success'));   
    }

    public function reviews(Request $request)
    {
        $auth  = auth('customers')->user();
        $items = $auth->feedback;
        return view('user.account.reviews', compact('auth', 'items'));    
    }

    public function contacts(Request $request)
    {
        $auth  = auth('customers')->user();
        $items = $auth->contacts()->latest('ContactID')->get();
        return view('user.account.contacts', compact('auth', 'items'));    
    }

    public function contact(ContactUs $contact, Request $request)
    {
        $auth  = auth('customers')->user();
        if($auth->CustomerID != $contact->CustomerID){
            abort(404);
        }
        $item  = $contact;
        return view('user.account.contact', compact('auth', 'item'));    
    }

    public function getAddContact()
    {
        $auth  = auth('customers')->user();
        return view('user.account.contact_add', compact('auth'));    
    }

    public function addContact(Request $request)
    {
        $auth  = auth('customers')->user();
        $data  = $request->validate([
            'subject'   => 'required|string',
            'message'   => 'required|string',
            'ContactID' => 'nullable|integer'
        ]);
        ContactUs::create([
            'CustomerID'    => $auth->CustomerID,
            'AdminID'       => 1,
            'Replay'        => (isset($data['ContactID']) && $data['ContactID'] ? $data['ContactID'] : null),
            'Subject'       => $data['subject'],
            'Message'       => $data['message']
        ]);
        return redirect(route('user.account.contacts'))->withFlashMessage(trans('panel.action_success'));   
    }

    public function book(Vehicle $vehicle, Request $request)
    {
        $item = $vehicle;
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
        $exists = Rental::where('VehicleID', $item->VehicleID)->where('FullDateTimeFrom', '<=', $inDate)->where('FullDateTimeTo', '>=', $inDate)->count();
        if($exists){
            return redirect()->back()->withInput($request->except('_token'))->withErrors(['date' => ['The Time From that you are selected is Unavaliable.']]);
        }
        // Save Rantal
        $from_time = strtotime($inDate); 
        $to_time = strtotime($request->date . ' ' . $request->TimeTo . ':00'); 
        $df = round(abs($from_time - $to_time) / 60,2);

        $df = $df/60;
        
        $rental = Rental::create([
            'CustomerID'        => auth('customers')->id(),
            'VehicleID'         => $item->VehicleID,
            'Date'              => $data['date'],
            'TimeFrom'          => $data['TimeFrom'],
            'TimeTo'            => $data['TimeTo'],
            'FullDateTimeFrom'  => $request->date . ' ' . $request->TimeFrom . ':00',
            'FullDateTimeTo'    => $request->date . ' ' . $request->TimeTo . ':00',
            'WithHelmet'        => isset($data['WithHelmet']) ? 1 : 0,
            'Deposit'           => ($df * $item->Price),
            'Amount'            => ($df * $item->Price),
            'Status'            => 'active',
            'RentalDateTime'    => now()
        ]);
        VehicleRental::create([
            'RentalID'  => $rental->RentalID,
            'VehicleID' => $item->VehicleID
        ]);
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
        $item->availabilities()->create([
            'DateTime'  => now(),
            'Status'    => 'active',
        ]);

        // Response
        return redirect()->back()->withFlashMessage('You have registered succefully.');
    }

    
}

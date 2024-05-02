<?php

namespace App\Http\Controllers\Panel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Hash;
use App\Models\Rental;
use App\Models\Vehicle;
use App\Models\Feedback;
use App\Models\Customer;
use App\Models\Spot;
use Illuminate\Support\Arr;
use DB;

class ReportController extends Controller
{
    public function spots(Request $request)
    {
        $chart = $this->chartBuilder();  
        return view('panel.reports.spots', compact('chart'));
    }

    public function vehicles(Request $request)
    {
        $builder = $this->chartVehicleBuilder();  
        $chart   = $builder[0];
        $items   = $builder[1];
        return view('panel.reports.vehicles', compact('chart', 'items'));
    }

    public function customers(Request $request)
    {
        $items = Customer::whereHas('rentals', function($q){
            return $q->where('Status', 'Active');
        })->withCount('rentals')->orderBy('rentals_count', 'desc')->take(10)->get();
        $chart = $this->chartBuilderForCustomer($items);
        return view('panel.reports.customer', compact('items', 'chart'));
    }

    private function chartBuilder()
    {
        $months = ['01', '02', '03', '04', '05', '06', '07', '08', '09', '10', '11', '12'];
        $spots  = Spot::all();
        $data   = [];
        $year   = date('Y');
        $colors = [
            'rgba(255, 152, 0, 1)',
            'rgba(33, 150, 243, 1)',
            'rgba(255, 87, 34, 1)',
            'rgba(0, 150, 136, 1)',
            'rgba(255, 152, 0, 1)',
            'rgba(21, 40, 60, 1)',
            'rgba(9, 113, 184, 1)',
            'rgba(30, 208, 133, 0.3)',
            'rgba(255, 87, 34, 1)',
            'rgba(103, 58, 183, 1)',
            'rgba(233, 30, 99, 1)',
            'rgba(0, 150, 136, 1)',
            'rgba(255, 152, 0, 1)',
            'rgba(21, 40, 60, 1)',
            'rgba(9, 113, 184, 1)',
            '#4B49AC',
            '#98BDFF'
        ];
        foreach ($spots as $key => $spot) {
            $handle = ['label' => $spot->Location, 'data' => [], 'backgroundColor' => Arr::random($colors, 1)[0]];
            foreach ($months as $ky => $month) {
                $handle['data'][] = Rental::whereYear('RentalDateTime', $year)->whereMonth('RentalDateTime', $month)->whereHas('vehicles', function($q) use($spot){
                    return $q->whereIn('vehiclerental.VehicleID', $spot->vehicles()->pluck('vehicle.VehicleID')->toArray());
                })->sum('rental.Amount');
                $handle['counter'][] = Rental::whereYear('RentalDateTime', $year)->whereMonth('RentalDateTime', $month)->whereHas('vehicles', function($q) use($spot){
                    return $q->whereIn('vehiclerental.VehicleID', $spot->vehicles()->pluck('vehicle.VehicleID')->toArray());
                })->count();
            }
            $data[] = $handle;
        }
        return $data;
    }

    private function chartVehicleBuilder()
    {
        $vehicles  = Vehicle::all();
        $data   = [];
        $year   = date('Y');
        $colors = [
            'rgba(255, 152, 0, 1)',
            'rgba(33, 150, 243, 1)',
            'rgba(255, 87, 34, 1)',
            'rgba(0, 150, 136, 1)',
            'rgba(255, 152, 0, 1)',
            'rgba(21, 40, 60, 1)',
            'rgba(9, 113, 184, 1)',
            'rgba(30, 208, 133, 0.3)',
            'rgba(255, 87, 34, 1)',
            'rgba(103, 58, 183, 1)',
            'rgba(233, 30, 99, 1)',
            'rgba(0, 150, 136, 1)',
            'rgba(255, 152, 0, 1)',
            'rgba(21, 40, 60, 1)',
            'rgba(9, 113, 184, 1)',
            '#4B49AC',
            '#98BDFF'
        ];
        $handle = ['label' => [], 'data' => [], 'backgroundColor' => [], 'borderColor' => []];
        $details = [];
        foreach ($vehicles as $key => $vehicle) {
            $color   = Arr::random($colors, 1)[0];
            $counter = $vehicle->rentals()->where('rental.Status', 'active')->count();
            $sum     = $vehicle->rentals()->where('rental.Status', 'active')->sum('rental.Amount');
            $handle['label'][]              = $vehicle->CodNumber;
            $handle['backgroundColor'][]    = $color;
            $handle['borderColor'][]        = $color;
            $handle['data'][]                = $counter;
            $details[] = [
                'code'  => $vehicle->CodNumber,
                'data'  => $counter,
                'sum'   => $sum,
            ];
        }
        return [$handle, $details];
    }

    private function chartBuilderForCustomer($customers)
    {
        $colors = [
            'rgba(255, 152, 0, 1)',
            'rgba(33, 150, 243, 1)',
            'rgba(255, 87, 34, 1)',
            'rgba(0, 150, 136, 1)',
            'rgba(255, 152, 0, 1)',
            'rgba(21, 40, 60, 1)',
            'rgba(9, 113, 184, 1)',
            'rgba(30, 208, 133, 0.3)',
            'rgba(255, 87, 34, 1)',
            'rgba(103, 58, 183, 1)',
            'rgba(233, 30, 99, 1)',
            'rgba(0, 150, 136, 1)',
            'rgba(255, 152, 0, 1)',
            'rgba(21, 40, 60, 1)',
            'rgba(9, 113, 184, 1)',
            '#4B49AC',
            '#98BDFF'
        ];
        $data = ['labels' => [], 'background' => [], 'border' => [], 'data' => []];
        foreach ($customers as $key => $value) {
            $color   = Arr::random($colors, 1)[0];
            $data['labels'][] = $value->Name;
            $data['background'][] = $color;
            $data['border'][] = $color;
            $data['data'][] = $value->rentals_count;
        }    
        return $data;
    }

}

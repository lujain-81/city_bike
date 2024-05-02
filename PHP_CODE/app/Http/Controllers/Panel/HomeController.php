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

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $stats = [
            'rental'    => Rental::count(),
            'vehicle'   => Vehicle::count(),
            'feeds'     => Feedback::count(),
            'customers' => Customer::count(),
            'spots'     => Spot::count(),
        ];  
        $vehicles = Vehicle::select('vehicle.*')
        ->Join('vehiclerental', 'vehicle.VehicleID', 'vehiclerental.VehicleID')
        ->distinct('vehicle.VehicleID')
        ->take(5)
        ->get();  
        $chart = $this->chartBuilder();  
        return view('panel.home.index', compact('stats', 'vehicles', 'chart'));
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
            }
            $data[] = $handle;
        }
        return $data;
    }

}

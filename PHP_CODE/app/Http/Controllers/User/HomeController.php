<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Vehicle;
use App\Models\Spot;
use Hash;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $items = Vehicle::take(4)->get();
        $spots = Spot::pluck('Location', 'SpotID');

        return view('user.home.index', compact('items', 'spots'));
    }

    public function spots(Request $request)
    {
        $items = Spot::all();
        return view('user.pages.spots', compact('items'));
    }
    
    public function vehicles(Request $request)
    {
        $spots = Spot::pluck('Location', 'SpotID');

        $items = Vehicle::latest('VehicleID');
        if($request->SpotID){
            $items = $items->where('SpotID', $request->SpotID);
        }
        if($request->Model){
            $items = $items->where('Model', $request->Model);
        }
        if($request->Type){
            $items = $items->where('Type', $request->Type);
        }
        if($request->CodNumber){
            $items = $items->where('CodNumber', $request->CodNumber);
        }
        if($request->Price){
            $items = $items->where('Price', $request->Price);
        }
        if($request->Manufacturer){
            $items = $items->where('Manufacturer', $request->Manufacturer);
        }
        $items = $items->take(100)->get();
        $arr = [];
        $k = 0;
        foreach ($items as $key => $value) {
            if($key % 4 == 0 ){
                $k = $k + 1;
            }   
            $arr[$k][] = $value;
        }
        $items = $arr;
        return view('user.pages.vehicles', compact('items', 'spots'));
    }
    
    public function vehicle(Vehicle $vehicle)
    {
        $item = $vehicle;
        return view('user.pages.vehicle', compact('item'));
    }

    public function book(Vehicle $vehicle)
    {
        $item = $vehicle;
        return view('user.pages.book', compact('item'));
    }
}

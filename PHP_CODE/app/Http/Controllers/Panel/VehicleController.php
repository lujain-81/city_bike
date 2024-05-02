<?php

namespace App\Http\Controllers\Panel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Vehicle;
use App\Models\Spot;
use Hash;
use Illuminate\Support\Str;
use Illuminate\Support\Carbon;
use Illuminate\Http\UploadedFile;

class VehicleController extends Controller
{
    public function index(Request $request)
    {
        $items = Vehicle::latest('VehicleID');
        $perPage = $request->page_no ? $request->page_no : 30;
        if($request->code){
            $items = $items->where('CodNumber', $request->code);
        }
        
        $items = $items->paginate($perPage);
        return view('panel.vehicles.index', compact('items'));
    }

    public function create(Request $request)
    {
        $spots = Spot::pluck('Location', 'SpotID');
        return view('panel.vehicles.create', compact('spots'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'SpotID'  => 'required|integer|exists:Spots,SpotID',
            'CodNumber' => 'required|string|unique:Vehicle,CodNumber',
            'Model' => 'required|string',
            'Type'     => 'required',
            'Manufacturer'     => 'required',
            'Image'     => 'required|image',
            'QRCode'     => 'required|string|unique:Vehicle,QRCode',
            'Price'     => 'required|numeric',
        ]);
        if($request->hasFile('Image')){
            $data['Image'] = $this->upload($request->file('Image'));
        }
        $emp     = auth('emloyees')->check() ? auth('emloyees')->id() : null;
        $admin   = auth('web')->check() ? auth()->id() : auth('employees')->user()->AdminID;

        $data['AdminID'] = $admin;
        $data['EmployeeID'] = $emp;
        $Vehicle = Vehicle::create($data);
        $route   = auth('web')->check() ? 'panel' : 'employees';
        
        return redirect(route($route . '.vehicles.index'))->withFlashMessage(trans('panel.action_success'));
    }

    public function edit(Vehicle $vehicle)
    {
        $item = $vehicle;
        $spots = Spot::pluck('Location', 'SpotID');
        return view('panel.vehicles.edit', compact('item', 'spots'));
    }

    public function show(Vehicle $vehicle)
    {
        $item = $vehicle;
        return view('panel.vehicles.show', compact('item'));
    }

    public function update(Vehicle $vehicle, Request $request)
    {
        $data = $request->validate([
            'SpotID'  => 'required|integer|exists:Spots,SpotID',
            'CodNumber' => 'required|string|unique:Vehicle,CodNumber,' . $vehicle->VehicleID . ',VehicleID',
            'Model' => 'required|string',
            'Type'     => 'required',
            'Manufacturer'     => 'required',
            'Image'     => 'nullable|image',
            'QRCode'     => 'required|string|unique:Vehicle,QRCode,' . $vehicle->VehicleID . ',VehicleID',
            'Price'     => 'required|numeric',
        ]);

        if($request->hasFile('Image')){
            $data['Image'] = $this->upload($request->file('Image'));
        }else{
            unset($data['Image']);
        }

        $vehicle->update($data);
        $vehicle = $vehicle->fresh();
        $route   = auth('web')->check() ? 'panel' : 'employees';
        
        return redirect(route($route . '.vehicles.index'))->withFlashMessage(trans('panel.action_success'));
    }

    public function destroy(Vehicle $vehicle)
    {
        $vehicle->delete();
        $route   = auth('web')->check() ? 'panel' : 'employees';

        return redirect(route($route . '.vehicles.index'))->withFlashMessage(trans('panel.action_success'));
    }

    private function upload(UploadedFile $file, string $path = 'uploads', string $slug = 'dummy slug')
    {
        $slug = Str::slug($slug);
        $currentDate = Carbon::now()->toDateString();
        $extension = $file->getClientOriginalExtension();
        $imageName = $slug . '-' . $currentDate . '-' . uniqid() . '.' . $extension;
        if (!file_exists($path)) {
            mkdir($path);
        }
        $file->move($path, $imageName);
        return '/'. $path . '/' . $imageName;
    }
}

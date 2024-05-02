<?php

namespace App\Http\Controllers\Panel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Rental;
use Hash;

class RentalController extends Controller
{
    public function index(Request $request)
    {
        $items = Rental::latest('RentalID');
        $perPage = $request->page_no ? $request->page_no : 30;
        
        $items = $items->paginate($perPage);
        return view('panel.rentals.index', compact('items'));
    }

    public function show(Rental $rental)
    {
        $item = $rental;
        return view('panel.rentals.show', compact('item'));
    }

    public function cancel(Rental $rental, Request $request)
    {
        $rental->update(['Status' => 'cancelled']);
        $rental->canecllation()->create([
            'Reasons'   => $request->reason,
            'DateTime'  => now()
        ]);
        return redirect(route('panel.rentals.index'))->withFlashMessage(trans('panel.action_success'));
    }
}

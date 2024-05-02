<?php

namespace App\Http\Controllers\Panel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Spot;
use Hash;

class SpotController extends Controller
{
    public function index(Request $request)
    {
        $items = Spot::latest('SpotID');
        $perPage = $request->page_no ? $request->page_no : 30;
        
        $items = $items->paginate($perPage);
        return view('panel.spots.index', compact('items'));
    }

    public function create(Request $request)
    {
        return view('panel.spots.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'Location'  => 'required|string|min:2|max:194',
        ]);
        $data['AdminID'] = auth()->id();
        $spot = Spot::create($data);
        
        return redirect(route('panel.spots.index'))->withFlashMessage(trans('panel.action_success'));
    }

    public function edit(Spot $spot)
    {
        $item = $spot;
        return view('panel.spots.edit', compact('item'));

    }

    public function update(Spot $spot, Request $request)
    {
        $data = $request->validate([
            'Location'  => 'required|string|min:2|max:194',
        ]);

        $spot->update($data);
        $spot = $spot->fresh();
        
        return redirect(route('panel.spots.index'))->withFlashMessage(trans('panel.action_success'));
    }

    public function destroy(Spot $spot)
    {
        $spot->delete();
        return redirect(route('panel.spots.index'))->withFlashMessage(trans('panel.action_success'));
    }
}

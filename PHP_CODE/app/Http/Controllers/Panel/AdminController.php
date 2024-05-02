<?php

namespace App\Http\Controllers\Panel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Hash;

class AdminController extends Controller
{
    public function index(Request $request)
    {
        $items = User::latest('AdminID');
        $perPage = $request->page_no ? $request->page_no : 30;
        
        $items = $items->paginate($perPage);
        return view('panel.admins.index', compact('items'));
    }

    public function create(Request $request)
    {
        return view('panel.admins.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'Name'  => 'required|string|min:2|max:194',
            'Email' => 'required|email|unique:Admin,Email',
            'Password' => 'required|string|min:6',
            'Phone'     => 'required|numeric|unique:Admin,Phone'
        ]);
        $data['Password'] = Hash::make($data['Password']);
        $user = User::create($data);
        
        return redirect(route('panel.admins.index'))->withFlashMessage(trans('panel.action_success'));
    }

    public function edit(User $admin)
    {
        $item = $admin;
        return view('panel.admins.edit', compact('item'));

    }

    public function update(User $admin, Request $request)
    {
        $data = $request->validate([
            'Name'  => 'required|string|min:2|max:194',
            'Email' => 'required|email|unique:Admin,Email,' . $admin->AdminID . ',AdminID',
            'Password' => 'nullable|string|min:6',
            'Phone'     => 'required|numeric|unique:Admin,Phone,' . $admin->AdminID . ',AdminID'
        ]);
        if (@$data['Password'] && @$data['Password'] != '') {
            $data['Password'] = Hash::make($data['Password']);
        } else {
            unset($data['Password']);
        }
        $admin->update($data);
        $admin = $admin->fresh();
        
        return redirect(route('panel.admins.index'))->withFlashMessage(trans('panel.action_success'));
    }

    public function destroy(User $admin)
    {
        $admin->delete();
        return redirect(route('panel.admins.index'))->withFlashMessage(trans('panel.action_success'));
    }
}

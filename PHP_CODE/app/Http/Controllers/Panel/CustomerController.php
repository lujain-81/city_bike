<?php

namespace App\Http\Controllers\Panel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Customer;
use Hash;

class CustomerController extends Controller
{
    public function index(Request $request)
    {
        $items = Customer::latest('CustomerID');
        $perPage = $request->page_no ? $request->page_no : 30;
        
        $items = $items->paginate($perPage);
        return view('panel.customers.index', compact('items'));
    }

    public function create(Request $request)
    {
        return view('panel.customers.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'Name'  => 'required|string|min:2|max:194',
            'Email' => 'required|email|unique:customer,Email',
            'Password' => 'required|string|min:6',
            'Phone'     => 'required|numeric|unique:customer,Phone',
            'NationalID'     => 'required|numeric|unique:customer,NationalID',
        ]);
        $data['Password'] = Hash::make($data['Password']);
        $user = Customer::create($data);
        
        return redirect(route('panel.customers.index'))->withFlashMessage(trans('panel.action_success'));
    }

    public function edit(Customer $customer)
    {
        $item = $customer;
        return view('panel.customers.edit', compact('item'));

    }

    public function update(Customer $customer, Request $request)
    {
        $data = $request->validate([
            'Name'  => 'required|string|min:2|max:194',
            'Email' => 'required|email|unique:customer,Email,' . $customer->CustomerID . ',CustomerID',
            'Password' => 'nullable|string|min:6',
            'Phone'     => 'required|numeric|unique:customer,Phone,' . $customer->CustomerID . ',CustomerID',
            'NationalID'     => 'required|numeric|unique:customer,NationalID,' . $customer->CustomerID . ',CustomerID',
        ]);
        if (@$data['Password'] && @$data['Password'] != '') {
            $data['Password'] = Hash::make($data['Password']);
        } else {
            unset($data['Password']);
        }
        $customer->update($data);
        $customer = $customer->fresh();
        
        return redirect(route('panel.customers.index'))->withFlashMessage(trans('panel.action_success'));
    }

    public function destroy(Customer $customer)
    {
        $customer->delete();
        return redirect(route('panel.customers.index'))->withFlashMessage(trans('panel.action_success'));
    }
}

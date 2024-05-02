<?php

namespace App\Http\Controllers\Panel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Employee;
use Hash;

class EmployeeController extends Controller
{
    public function index(Request $request)
    {
        $items = Employee::latest('EmployeeID');
        $perPage = $request->page_no ? $request->page_no : 30;
        
        $items = $items->paginate($perPage);
        return view('panel.employees.index', compact('items'));
    }

    public function create(Request $request)
    {
        return view('panel.employees.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'Name'  => 'required|string|min:2|max:194',
            'Email' => 'required|email|unique:employee,Email',
            'Password' => 'required|string|min:6',
            'Phone'     => 'required|numeric|unique:employee,Phone',
            'Salary'     => 'required|numeric',
        ]);
        $data['Password'] = Hash::make($data['Password']);
        $data['AdminID'] = auth()->id();
        $user = Employee::create($data);
        
        return redirect(route('panel.employees.index'))->withFlashMessage(trans('panel.action_success'));
    }

    public function edit(Employee $employee)
    {
        $item = $employee;
        return view('panel.employees.edit', compact('item'));

    }

    public function update(Employee $employee, Request $request)
    {
        $data = $request->validate([
            'Name'  => 'required|string|min:2|max:194',
            'Email' => 'required|email|unique:employee,Email,' . $employee->EmployeeID . ',EmployeeID',
            'Password' => 'nullable|string|min:6',
            'Phone'     => 'required|numeric|unique:employee,Phone,' . $employee->EmployeeID . ',EmployeeID',
            'Salary'     => 'required|numeric',
        ]);
        if (@$data['Password'] && @$data['Password'] != '') {
            $data['Password'] = Hash::make($data['Password']);
        } else {
            unset($data['Password']);
        }
        $employee->update($data);
        $employee = $employee->fresh();
        
        return redirect(route('panel.employees.index'))->withFlashMessage(trans('panel.action_success'));
    }

    public function destroy(Employee $employee)
    {
        $employee->delete();
        return redirect(route('panel.employees.index'))->withFlashMessage(trans('panel.action_success'));
    }
}

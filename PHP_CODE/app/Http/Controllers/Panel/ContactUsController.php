<?php

namespace App\Http\Controllers\Panel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ContactUs;
use Hash;

class ContactUsController extends Controller
{
    public function index(Request $request)
    {
        $items = ContactUs::latest('ContactID');
        $perPage = $request->page_no ? $request->page_no : 30;
        
        $items = $items->paginate($perPage);
        return view('panel.contacts.index', compact('items'));
    }

    public function show(ContactUs $contactU)
    {
        $item = $contactU;
        return view('panel.contacts.show', compact('item'));
    }

    public function store(Request $request)
    {
        $contact = ContactUs::findOrFail($request->ContactID);
        $admin   = auth('web')->check() ? auth()->id() : auth('employees')->user()->AdminID;
        $emp     = auth('employees')->check() ? auth('employees')->id() : null;
        $route   = auth('web')->check() ? 'panel' : 'employees';
        $contact->replies()->create([
            'Subject'   => $contact->subject . ' - Replay',
            'Message'   => $request->message,
            'Replay'    => $contact->ContactID,
            'AdminID'   => $admin,
            'CustomerID'   => $contact->CustomerID,
            'EmployeeID'    => $emp
        ]);
        
        return redirect(route($route . '.contact-us.index'))->withFlashMessage(trans('panel.action_success'));
    }

    public function destroy(ContactUs $contactU)
    {
        $route   = auth('web')->check() ? 'panel' : 'employees';
        $contactU->delete();
        return redirect(route($route . '.contact-us.index'))->withFlashMessage(trans('panel.action_success'));
    }
}

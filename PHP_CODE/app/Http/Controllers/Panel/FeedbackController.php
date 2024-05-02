<?php

namespace App\Http\Controllers\Panel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Feedback;
use Hash;

class FeedbackController extends Controller
{
    public function index(Request $request)
    {
        $items = Feedback::latest('FeedbackID');
        $perPage = $request->page_no ? $request->page_no : 30;
        
        $items = $items->paginate($perPage);
        return view('panel.feedback.index', compact('items'));
    }

    public function changeStatus(Request $request)
    {
        $feedback = Feedback::findOrFail($request->id);
        $feedback->update([
            'Status'    => !$feedback->Status
        ]);
        
        return redirect(route('panel.feedback.index'))->withFlashMessage(trans('panel.action_success'));
    }

    public function destroy(Feedback $feedback)
    {
        $feedback->delete();
        return redirect(route('panel.feedback.index'))->withFlashMessage(trans('panel.action_success'));
    }
}

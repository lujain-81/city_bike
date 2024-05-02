<?php

namespace App\Http\Controllers\Panel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CompanyInformation;
use Hash;
use Illuminate\Support\Str;
use Illuminate\Support\Carbon;
use Illuminate\Http\UploadedFile;

class CompanyInformationController extends Controller
{
    public function index(Request $request)
    {
        $item = CompanyInformation::latest('CompanyID')->first();
        return view('panel.companyInformation.edit', compact('item'));
    }

    public function update(CompanyInformation $companyInformation, Request $request)
    {
        $data = $request->validate([
            'Name'          => 'required|string',
            'Email'         => 'required|email',
            'Address'       => 'required',
            'Phone'         => 'required|numeric', 
            'Logo'          => 'nullable|image', 
        ]);

        if($request->hasFile('Logo')){
            $data['Logo'] = $this->upload($request->file('Logo'));
        }else{
            unset($data['Logo']);
        }

        $companyInformation->update($data);
        return redirect()->back()->withFlashMessage(trans('panel.action_success'));
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

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\SettingRequest;
use App\Models\Setting;
use Illuminate\Support\Facades\DB;

class SettingsController extends Controller
{
    public function __construct()
    {
        $this->adminMiddleware();
    }

    public function edit()
    {
        $setting = DB::table('settings')->first();
        return view('admin.settings.edit', compact('setting'));
    }

    public function update(SettingRequest $request, $id)
    {
        $setting = Setting::findOrFail($id);

        $input = $request->all();
        $image1 = $this->uploadSingleFile('image/', 'favicon');
        $image2 = $this->uploadSingleFile('image/contact/', 'contact_image');
        if ($image1) {
            $this->deleteFile('image/', $setting->favicon);
            $input['favicon'] = $image1;
        }
        if ($image2) {
            $this->deleteFile('image/contact/', $setting->contact_image);
            $input['contact_image'] = $image2;
        }
        $setting->update($input);
        return redirect()->back()->with('success', 'Data updated successfully');
    }
}

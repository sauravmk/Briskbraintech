<?php

namespace App\Http\Controllers\Admin;

use App\Models\Settings;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SettingsController extends Controller
{
    public function index()
    {
        $setting = Settings::find(1);
        return view('admin.setting.index', compact('setting'));
    }
    
    private function getValidationRules()
    {
        return [
            'website_name' => 'required|max:255',
            'email' => 'nullable|email', // Added email field with email validation
            'address' => 'nullable',
            'mobile' => 'nullable|digits:10', // Added mobile field with a 10-digit numeric validation
            'logo' => 'nullable|image|mimes:jpg,png,jpeg|max:4096',
            'favicon' => 'nullable|image|mimes:ico|max:4096',
        ];
    }
    public function savedata(Request $request)
    {
        // Validate the request data manually
        $validationRules = $this->getValidationRules();

        $this->validate($request, $validationRules);
        $validationErrors = [];

        if (empty($request->website_name) || strlen($request->website_name) > 255) {
            $validationErrors['website_name'] = 'Website name is required and should not exceed 255 characters.';
        }

        // Check file uploads for 'logo' and 'favicon'
        if ($request->hasFile('logo')) {
            $logoFile = $request->file('logo');
            if (
                !$logoFile->isValid() ||
                !in_array($logoFile->getClientOriginalExtension(), ['jpg', 'png', 'jpeg']) ||
                $logoFile->getSize() > 4096 * 1024
            ) {
                $validationErrors['logo'] = 'The logo should be a valid JPG, PNG, or JPEG file with a maximum size of 4 MB.';
            }
        }

        if ($request->hasFile('favicon')) {
            $faviconFile = $request->file('favicon');
            if (
                !$faviconFile->isValid() ||
                $faviconFile->getClientOriginalExtension() !== 'ico' ||
                $faviconFile->getSize() > 4096 * 1024
            ) {
                $validationErrors['favicon'] = 'The favicon should be a valid ICO file with a maximum size of 4 MB.';
            }
        }

        if (!empty($validationErrors)) {
            return redirect()->back()->withErrors($validationErrors)->withInput();
        }

        // Prepare the settings data
        $settingsData = [
            'website_name' => $request->website_name,
            'email' => $request->email,
            'address' => $request->address,
            'mobile' => $request->mobile,
        ];

        // Handle file uploads for 'logo' and 'favicon' fields
        $logoPath = $this->handleFileUpload($request, 'logo');
        $faviconPath = $this->handleFileUpload($request, 'favicon');

        if ($logoPath !== null) {
            $settingsData['logo'] = $logoPath;
        }

        if ($faviconPath !== null) {
            $settingsData['favicon'] = $faviconPath;
        }

        // Create or update the settings record in the database
        $setting = Settings::first(); // Assuming you want to update the first existing record

        if ($setting) {
            $setting->update($settingsData);
        } else {
            // If no record exists, create a new one
            Settings::create($settingsData);
        }

        return redirect('admin/settings')->with('success', 'Settings Updated Successfully');
    }


    private function handleFileUpload($request)
    {
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $name = time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/images/logo');
            $image->move($destinationPath, $name);
            return '/images/logo/' . $name;
        }
        return null;
    }
}

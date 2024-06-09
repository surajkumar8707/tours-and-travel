<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Models\Enquiry;
use App\Models\Setting;
use App\Models\SocialMediaLink;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard(){
        try{
            $data = [];
            return view('admin.dashboard', compact('data'));
        }
        catch(\Exception $e){
            dd($e->getMessage());
        }
    }

    public function showContacts()
    {
        $contacts = Contact::orderBy('created_at', 'DESC')->paginate(10);
        // dd($contacts->toArray());
        return view('admin.contacts', compact('contacts'));
    }

    public function showEnquiries()
    {
        $enquiries = Enquiry::orderBy('created_at', 'DESC')->paginate(10);
        return view('admin.enquiries', compact('enquiries'));
    }

    public function socialMediaShow()
    {
        $socialMediaLinks = SocialMediaLink::first();
        return view('admin.social_media.show', compact('socialMediaLinks'));
    }

    /**
     * Admin Social Media create
     * Route Name : admin/social-media/create
     * Route : admin.social.media.create
     * Method : PUT
     * @return \Illuminate\View\View
     */
    public function socialMediaCreate()
    {
        $socialMediaLinks = SocialMediaLink::first();
        return view('admin.social_media.create', compact('socialMediaLinks'));
    }

    /**
     * Admin Social Media storeOrUpdate
     * Route Name : admin/social-media/storeOrUpdate
     * Route : admin.social.media.storeOrUpdate
     * Method : POST
     * @return \Illuminate\View\View
     */
    public function socialMediaStoreOrUpdate(Request $request)
    {
        $request->validate([
            'youTube' => 'nullable|string',
            'instagram' => 'nullable|string',
            'facebook' => 'nullable|string',
            'linkedin' => 'nullable|string',
            'at_least_one' => 'required_without_all:youTube,instagram,facebook,linkedin',
        ], [
            'at_least_one' => 'At least one of YouTube, Instagram, Facebook, or LinkedIn is required.',
        ]);
        $socialMediaLinks = SocialMediaLink::firstOrNew();

        // Update or add new links
        $socialMediaLinks->youTube = $request->input('youTube');
        $socialMediaLinks->instagram = $request->input('instagram');
        $socialMediaLinks->facebook = $request->input('facebook');
        $socialMediaLinks->linkedin = $request->input('linkedin');
        $socialMediaLinks->save();

        return redirect()->route('admin.social.media.show')->with(['message' => 'Social media links updated/added successfully']);
    }

    public function appSetting()
    {
        $settings = Setting::first();
        // dd($settings);
        return view('admin.setting', compact('settings'));
    }

    public function appSettingUpdate(Request $request)
    {
        $request->validate([
            'app_name' => 'required',
            'email' => 'required|email',
            'whatsapp' => 'required',
            'contact' => 'required',
            // 'header_image' => 'nullable|url',
            'header_image' => 'nullable|image|mimes:jpeg,png,jpg,gif',
        ]);
        // Find an existing record or create a new one
        $settings = Setting::firstOrNew();

        // Update or add new settings
        $settings->app_name = $request->input('app_name');
        $settings->email = $request->input('email');
        $settings->whatsapp = $request->input('whatsapp');
        $settings->contact = $request->input('contact');

        // Handle image upload
        if ($request->hasFile('header_image')) {
            $customFileName = 'custom_image_name_' . time() . '_' . rand(100, 999) . '.' . $request->file('header_image')->getClientOriginalExtension();
            $request->file('header_image')->move(public_path('assets/images'), $customFileName);
            $settings->header_image = 'assets/images/' . $customFileName;
        }
        // $settings->header_image = $request->input('header_image');
        $settings->save();

        return redirect()->route('admin.app.setting')->with('success', 'Settings updated/added successfully');
    }
}

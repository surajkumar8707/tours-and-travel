<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Enquiry;
use App\Models\HomePageCarousel;
use App\Models\PefectTourPackages;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    /**
     * Home page
     * Route Name : index
     * Method : GET
     * @return homapage view
     */
    public function index()
    {
        try {
            $carousels = HomePageCarousel::where('status', 1)->get();
            $pefect_tour_packages = PefectTourPackages::get();
            return view('index', compact('carousels', 'pefect_tour_packages'));
        } catch (\Exception $e) {
            dd($e->getMessage());
        }
    }

    /**
     * about page
     * Route Name : about
     * Method : GET
     * @return homapage view
     */
    public function about()
    {
        try {
            return view('about_us');
        } catch (\Exception $e) {
            dd($e->getMessage());
        }
    }

    /**
     * blog page
     * Route Name : blog
     * Method : GET
     * @return homapage view
     */
    public function blog()
    {
        try {
            return view('blog');
        } catch (\Exception $e) {
            dd($e->getMessage());
        }
    }

    /**
     * contact page
     * Route Name : contact
     * Method : GET
     * @return homapage view
     */
    public function contact()
    {
        try {
            return view('contact_us');
        } catch (\Exception $e) {
            dd($e->getMessage());
        }
    }

    /**
     * This functions stores the contact information
     * Route Name : save.contact
     * Route : save-contact
     * Method : POST
     * @return \Illuminate\View\View
     */
    public function saveContact(Request $request)
    {
        // dd($request->all());
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'message' => 'required',
        ]);

        $contact = Contact::create($validatedData);


        // $to = "harshitajoshi@corbettnationalparkbooking.co.in"; // Admin's email address
        // $subject = "New Contact Received from " . $validatedData['name']; // Email subject
        // $message = "Name: " . $validatedData['name'] . "\n" .
        //     "Email: " . $validatedData['email'] . "\n" .
        //     // "Phone: " . $validatedData['phone'] . "\n" .
        //     "Message: " . $validatedData['message']; // Email message
        // $headers = "From: " . $validatedData['email']; // Sender's email address as From

        // // Send email
        // if (mail($to, $subject, $message, $headers)) {
        //     $message = "Enquiry submitted successfully!";
        // } else {
        //     $message = "Failed to submit enquiry.";
        // }

        // Optionally, you can add a success message or redirect to a thank-you page
        return redirect()->back()->with('success', 'Your message has been sent successfully!');
    }

    /**
     * gallery page
     * Route Name : gallery
     * Method : GET
     * @return homapage view
     */
    public function gallery()
    {
        try {
            return view('gallery');
        } catch (\Exception $e) {
            dd($e->getMessage());
        }
    }

    /**
     * packages page
     * Route Name : packages
     * Method : GET
     * @return homapage view
     */
    public function packages()
    {
        try {
            $pefect_tour_packages = PefectTourPackages::get();
            return view('packages', compact('pefect_tour_packages'));
        } catch (\Exception $e) {
            dd($e->getMessage());
        }
    }

    /**
     * Privacy Policy page
     * Route Name : privacy.policy
     * Method : GET
     * @return homapage view
     */
    public function privacyPolicy()
    {
        try {
            return view('privacy_policy');
        } catch (\Exception $e) {
            dd($e->getMessage());
        }
    }

    /**
     * Terms and Conditions page
     * Route Name : terms.condition
     * Method : GET
     * @return homapage view
     */
    public function termsCondition()
    {
        try {
            return view('terms_condition');
        } catch (\Exception $e) {
            dd($e->getMessage());
        }
    }

    /**
     * Submit Enquiry form
     * Route Name : enquiry.submit
     * Method : POST
     * @return homapage view
     */
    public function enquirySubmit(Request $request)
    {
        try {
            $data = $this->validate($request, [
                'name' => 'required',
                'email' => 'required|email',
                'phone' => 'required|integer',
                'message' => 'required',
            ]);
            $enquiry = Enquiry::create($data);
            return redirect()->back()->with('success', 'Your Enquiry has been saved successfully, Our Team will be notified soon');

        } catch (\Exception $e) {
            dd($e->getMessage());
        }
    }

    public function jeepSafari()
    {
        try {
            return view('jeep_safari');
        } catch (\Exception $e) {
            dd($e->getMessage());
        }
    }
    public function elephantSafari()
    {
        try {
            return view('elephant_safari');
        } catch (\Exception $e) {
            dd($e->getMessage());
        }
    }
    public function canterSafari()
    {
        try {
            return view('canter_safari');
        } catch (\Exception $e) {
            dd($e->getMessage());
        }
    }
    public function dhikalaNight()
    {
        try {
            return view('dhikala_night');
        } catch (\Exception $e) {
            dd($e->getMessage());
        }
    }
    public function cancelRefund()
    {
        try {
            return view('cancel_refund');
        } catch (\Exception $e) {
            dd($e->getMessage());
        }
    }
}

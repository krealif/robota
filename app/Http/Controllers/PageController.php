<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use App\Models\Client;
use App\Models\Feature;
use App\Models\Pricing;
use App\Mail\ContactMail;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PageController extends Controller
{
    public function home() {
        $dataClient = Client::all();
        $dataFeature = Feature::all();
        $dataPricing = Pricing::all();
        $dataFaq = Faq::all();
        $dataTestimonial = Testimonial::all();
        return view('page.home', compact('dataClient', 'dataFeature', 'dataPricing', 'dataFaq', 'dataTestimonial'));
    }
    
    public function about() {
        return view('page.about');
    }

    public function contact() {
        $dataClient = Client::all();
        $dataTestimonial = Testimonial::all();
        return view('page.contact', compact('dataClient', 'dataTestimonial'));
    }

    public function login() {
        return view('page.login');
    }

    public function sendEmail(Request $request) {
        $content = $request->validate([
            'firstName' => 'required|string|max:255',
            'lastName' => 'required|string|max:255',
            'email' => 'required|string|max:255',
            'phoneNumber' => 'required|string|max:20',
            'companyName'=> 'required|string|max:255',
            'message'=> 'required|string',
        ]);
        
        Mail::to('sales@robota.test')->send(new ContactMail($content));
        return back()->with('success', 'Email is sent successfully.');
    }
}

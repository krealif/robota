<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use App\Models\Client;
use App\Models\Feature;
use App\Models\Pricing;

class PageController extends Controller
{
    public function home() {
        $dataClient = Client::all();
        $dataFeature = Feature::all();
        $dataPricing = Pricing::all();
        $dataFaq = Faq::all();
        return view('page.home', compact('dataClient', 'dataFeature', 'dataPricing', 'dataFaq'));
    }
    
    public function about() {
        return view('page.about');
    }

    public function contact() {
        $dataClient = Client::all();
        return view('page.contact', compact('dataClient'));
    }

    public function login() {
        return view('page.login');
    }
}

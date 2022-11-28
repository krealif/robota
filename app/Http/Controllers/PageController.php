<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Feature;
use App\Models\Pricing;

class PageController extends Controller
{
    public function home() {
        $dataClient = Client::all();
        $dataFeature = Feature::all();
        $dataPricing = Pricing::all();
        return view('page.home', compact('dataClient', 'dataFeature', 'dataPricing'));
    }
    
    public function about() {
        return view('page.about');
    }

    public function contact() {
        $clients = Client::all();
        return view('page.contact', compact('clients'));
    }

    public function login() {
        return view('page.login');
    }
}

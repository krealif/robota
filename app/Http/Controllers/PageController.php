<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Feature;

class PageController extends Controller
{
    public function home() {
        $clients = Client::all();
        $features = Feature::all();
        return view('page.home', compact('clients', 'features'));
    }
    
    public function about() {
        return view('page.about');
    }

    public function contact() {
        return view('page.contact');
    }

    public function login() {
        return view('page.login');
    }
}

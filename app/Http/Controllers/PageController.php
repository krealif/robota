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
        $clients = Client::all();
        return view('page.contact', compact('clients'));
    }

    public function login() {
        return view('page.login');
    }
}

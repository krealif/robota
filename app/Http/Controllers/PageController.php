<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Feature;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home() {
        $clients = Client::all();
        $features = Feature::all();
        return view('page.home', compact('clients', 'features'));
    }
}

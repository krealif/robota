<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home() {
        $clients = Client::all();
        return view('page.home', compact('clients'));
    }
}

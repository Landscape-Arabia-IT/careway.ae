<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TransportController extends Controller
{
    public function comingSoon()
    {
        return view('transport.coming-soon');
    }
}

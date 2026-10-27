<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BusinessMenController extends Controller
{
    public function comingSoon()
    {
        return view('business-men.coming-soon');
    }
}

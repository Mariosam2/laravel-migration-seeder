<?php

namespace App\Http\Controllers\Guest;

use App\Models\Train;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        $trains = Train::orderBy('canceled', 'asc')->get();
        return view('home', compact('trains'));
    }

    public function about()
    {
        return view('about');
    }
}

<?php

namespace App\Http\Controllers\Guest;

use App\Models\Train;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function trains()
    {
        $trains = Train::all();
        // dd($trains);

        return view('welcome', compact('trains'));
    }
}

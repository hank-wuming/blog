<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class HomeController extends Controller
{
    /**
     * @return View
     */
    public function home()
    {
        return view('home.home');
    }
}

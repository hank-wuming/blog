<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

/**
 * Class HomeController
 *
 * @author HankChang
 */
class HomeController extends Controller
{
    private $request;

    /**
     * HomeController constructor.
     *
     * @param Request          $request
     */
    public function __construct(Request $request)
    {
        $this->middleware('auth');

        $this->request   = $request;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        \Log::info('Hello');
        return view('home');
    }
}

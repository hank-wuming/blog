<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

/**
 * Class TestController
 *
 * @author HankChang
 */
class TestController extends Controller
{
    private $request;

    /**
     * TestController constructor.
     *
     * @param Request $request
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
        return view('test');
    }
}

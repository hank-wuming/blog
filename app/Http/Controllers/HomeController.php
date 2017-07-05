<?php

namespace App\Http\Controllers;

use App\Contracts\Repository\UserRepoContract;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    private $request;
    private $user_repo;

    /**
     * HomeController constructor.
     *
     * @param Request          $request
     * @param UserRepoContract $user_repo_contract
     */
    public function __construct(
        Request $request,
        UserRepoContract $user_repo_contract
    ) {
        $this->middleware('auth');

        $this->request   = $request;
        $this->user_repo = $user_repo_contract;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }
}

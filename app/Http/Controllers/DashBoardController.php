<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashBoardController extends Controller
{

    /**
     * index
     *
     * @return void
     */
    public function index()
    {
     return view('dashBoard');
    }
}
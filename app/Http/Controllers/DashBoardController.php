<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashBoardController extends Controller
{
    //* open dashboard pag
    public function index()
    {
     return view('dashBoard');
    }
}
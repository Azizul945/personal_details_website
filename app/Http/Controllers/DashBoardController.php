<?php

namespace App\Http\Controllers;
use Illuminate\View\View;
use Illuminate\Http\Request;

class DashBoardController extends Controller
{

    function dasboardPage():View{
        return view('pages.dashboard.dashboard-page');
    }

}

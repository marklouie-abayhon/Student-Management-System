<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MainDashboardController extends Controller
{
    // view page course
    public function course(){
        return view('dashboard.course');
    }

}

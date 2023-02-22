<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function home(){
        return inertia('landing');
    }

    public function employee(){
        return inertia('Employees');
    }

    public function office(){
        return inertia('Offices');
    }

    public function item(){
        return inertia('Items');
    }


}

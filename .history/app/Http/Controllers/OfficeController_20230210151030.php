<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Office;

class OfficeController extends Controller
{
    public function office(){
        $offices = Office::orderBy('name')->get();

        return inertia("Offices",[
            'offices' => $offices
        ]);
    }
}

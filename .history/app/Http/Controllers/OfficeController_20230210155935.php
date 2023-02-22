<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Office;

class OfficeController extends Controller
{
    public function office(){
        $offices = Office::orderBy('id')
        -with('employee')
        ->get();

        return inertia("Offices",[
            'offices' => $offices
        ]);
    }
}

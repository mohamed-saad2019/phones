<?php

namespace App\Http\Controllers;

use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use File;

class PhoneController extends Controller
{
    // Dashboard - Analytics
    public function addNumbers(){
        return view('pages.addnumbers');
    }

    public function uploadxls(Request $request){

        $request->validate([
            'file'=> 'required|mimes:xlsx, xls'
         ]);

        return view('pages.addnumbers');
    }


}


<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelpController extends Controller
{

    public function showHelpPage(){

        return view('help');
    }
}

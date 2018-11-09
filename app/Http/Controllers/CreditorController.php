<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CreditorController extends Controller
{
    //
    public function home()
    {
        return view('creditor/creditor-home');
    }
    public function profile()
    {
        return view('creditor/creditor-barrowerinfo');
    }
}

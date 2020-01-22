<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CourcesController extends Controller
{
    public function cource()
    {
        return view('cource.list');
    }

    public function detail()
    {
        return view('cource.detail');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CasaController extends Controller
{
    public function index()
    {
        return view('auth.casa.index');
    }
}

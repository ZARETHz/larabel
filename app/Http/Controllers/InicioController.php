<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InicioController extends Controller
{
    public function index()
    {
        return view('inicio');
    }

    public function v1()
    {
        return view('v1');
    }
    public function v2()
    {
        return view('v2');
    }

    public function v3()
    {
        return view('v3');
    }
}
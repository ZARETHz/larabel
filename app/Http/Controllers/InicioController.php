<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InicioController extends Controller{
public function v1(){  
        return view('pages.v1',["titulo"=>"luna"]);
    }
    public function inicio(){  
        return view('pages.inicio',["titulo"=>"bienvendio"]);
    }    
    public function v2(){  
        return view('pages.v2',["titulo"=>"sol"]);
    }    
    public function v3(){  
        return view('pages.v3',["titulo"=>"estrella"]);
    }
    public function v4(){  
    return view('pages.v4',["titulo"=>"galaxia"]);
    }
}
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PessoasController extends Controller
{
    
    public function index()
    {
        
        $list pessoas::=Pessoa::all();

        return view(view 'pessoas.index',[
            'pessoas' => $list pessoas
        ] );
        
    }   
}

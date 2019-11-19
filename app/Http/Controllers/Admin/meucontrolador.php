<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class meucontrolador extends Controller
{
    private $cliente = [ 
        'id'    => 1,
        'nome'  => 'Rafael Rocha',
        'idade' => 20
    ];

    public function index(){

        return view('info', [
            'info' => $this->cliente
        ]);
    }
}

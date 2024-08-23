<?php

namespace App\Http\Controllers;

use App\Service\usuarioService;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
 protected $usuarioService;

 public function __construct(UsuarioService $usuarioService)
 {

   $this->usuarioService = $usuarioService;

 }
 
    public function store(Request $request){
        $user = $this->usuarioService->creat($request->all());
        return $user;
    }
 

}

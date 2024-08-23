<?php

namespace App\Service;

use App\Models\Usuario;

class usuarioService
{
    public function creat(array $dados){
        $user = Usuario::create([
            'nome'=> $dados['nome'],
            'email' => $dados['email'],
            'password' => $dados['password']
        ]);
        return $user;
    }

    public function delete(){

    }

    public function findById(){

    }
    public function getAll(){
        
    }

    public function searchByName(){
        
    }


}

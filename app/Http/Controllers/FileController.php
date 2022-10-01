<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileController extends Controller
{
    public function index(){
        if(PermissionController::hasAccess('Arquivos')){
            return view('panel.files');
        }else{
            echo 'Acesso negado, o administrador não liberou acesso para o seu usuário a esta tela!';
        }
    }
}

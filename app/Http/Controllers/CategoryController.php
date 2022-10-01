<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\PermissionController;

class CategoryController extends Controller
{
    public function index(){
        if(PermissionController::hasAccess('Categorias')){
            return view('panel.categories');
        }else{
            echo 'Acesso negado, o administrador não liberou acesso para o seu usuário a esta tela!';
        }

    }
}

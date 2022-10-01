<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index(){
        if(PermissionController::hasAccess('Cursos')){
            return view('panel.courses');
        }else{
            echo 'Acesso negado, o administrador não liberou acesso para o seu usuário a esta tela!';
        }
    }
}

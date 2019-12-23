<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\usuarios;
class UsuariosController extends Controller
{
    public function getAll(){
        $usuarios= new usuarios;
        $usuarios= usuarios::get();
        return $usuarios;
    }

    public function add(Request $request ){
        $usuarios= new usuarios;
        $usuarios= usuarios::create($request->all());
        return $usuarios;


    }


    public function getOneCed($cedula){
        $userResult = DB::table('usuarios') ->WHERE ('cedula',$cedula)->get();
        return $userResult;


    }

    public function ValidarCedOrEmail($cedula,$email){
        $users = DB::table('usuarios')
                    ->where('cedula',$cedula )
                    ->orWhere('email', $email)
                    ->get();
                    return $users;
    }

    public function getOneEmail($email){
        $userResult = DB::table('usuarios') ->WHERE ('email',$email)->get();
        return $userResult;


    }
    

    public function getOne($id ){
        $usuarios= new usuarios;
        $usuarios= usuarios::find($id);
        return $usuarios;


    }

    
    public function update($id, Request $request ){
        $usuarios= new usuarios;
        $usuarios= usuarios:: findOrFail ($id);
        $usuarios->update($request->all());
        return $usuarios;


    }


    public function delete($id){
        $usuarios= new usuarios;
        $usuarios= $this->getOne($id);
        $usuarios->delete();
        return $usuarios;


    }
}

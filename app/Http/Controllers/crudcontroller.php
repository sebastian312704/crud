<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Stmt\TryCatch;

class crudcontroller extends Controller
{
    public function index(){
        $datos=DB::select("select * from registros");
        return view("welcome")->with("datos", $datos);
    }

    public function index1(){
        $datos=DB::select("select * from registros1");
        return view("welcome2")->with("datos", $datos);
    }

    public function create(Request $request){
        
        try{
        $sql=DB::insert("insert into registros(id,nombre,rol,usuario,identificacion,programa,email) value(?,?,?,?,?,?,?)",[
            $request->txtcodigo,
            $request->txtnombre,
            $request->txtrol,
            $request->txtusuario,
            $request->txtidentificacion,
            $request->txtprograma,
            $request->txtemail,
        ]);
    }catch(\Throwable $th){
        $sql=0;
    }
        if($sql == true){
            return back()->with("correcto", "Estudiante registrado correctamente");
        } else{
            return back()->with("incorrecto", "Error al registrar");
        }
    }

    public function create1(Request $request){
        
        try{
        $sql=DB::insert("insert into registros1(id,nombre,rol,usuario,identificacion,email) value(?,?,?,?,?,?)",[
            $request->txtcodigo,
            $request->txtnombre,
            $request->txtrol,
            $request->txtusuario,
            $request->txtidentificacion,
            $request->txtemail,
        ]);
    }catch(\Throwable $th){
        $sql=0;
    }
        if($sql == true){
            return back()->with("correcto", "Profesor registrado correctamente");
        } else{
            return back()->with("incorrecto", "Error al registrar");
        }
    }

    public function update(Request $request){
        try{
            $sql=DB::update("update registros set nombre=?, rol=?, usuario=?, identificacion=?, programa=?, email=? where id=?",[
                $request->txtnombre,
                $request->txtrol,
                $request->txtusuario,
                $request->txtidentificacion,
                $request->txtprograma,
                $request->txtemail,
                $request->txtcodigo,
            ]);
            if($sql == 0){
                $sql = 1;
            }
        }catch(\Throwable $th){
            $sql= 0;
        }
        if($sql == true){
            return back()->with("correcto", "Estudiante modificado correctamente");
        } else{
            return back()->with("incorrecto", "Error al modificar");
        }
    }

    public function update1(Request $request){
        try{
            $sql=DB::update("update registros1 set nombre=?, rol=?, usuario=?, identificacion=?, email=? where id=?",[
                $request->txtnombre,
                $request->txtrol,
                $request->txtusuario,
                $request->txtidentificacion,
                $request->txtemail,
                $request->txtcodigo,
            ]);
            if($sql == 0){
                $sql = 1;
            }
        }catch(\Throwable $th){
            $sql= 0;
        }
        if($sql == true){
            return back()->with("correcto", "Profesor modificado correctamente");
        } else{
            return back()->with("incorrecto", "Error al modificar");
        }
    }

    public function delete($id){

        try{
            $sql=DB::delete("delete from registros where id=$id");
        }catch(\Throwable $th){
            $sql=0;
        }
        if($sql == true){
            return back()->with("correcto", "Estudiante eliminado correctamente");
        } else{
            return back()->with("incorrecto", "Error al eliminar");
        }
    }

    public function delete1($id){

        try{
            $sql=DB::delete("delete from registros1 where id=$id");
        }catch(\Throwable $th){
            $sql=0;
        }
        if($sql == true){
            return back()->with("correcto", "Profesor eliminado correctamente");
        } else{
            return back()->with("incorrecto", "Error al eliminar");
        }
    }
}



<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Stmt\TryCatch;
use App\Http\Requests\añadirEstFormRequest;
use App\Http\Requests\añadirProfFormRequest;
use App\Http\Requests\añadirasigproFormRequest;
use App\Http\Requests\añadirasigestFormRequest;

class crudcontroller extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $datos=DB::select("select * from registros");
        return view("welcome5")->with("datos", $datos);
    }

    public function index_Registrar_Profesor(){
        $datos=DB::select("select * from registros1");
        return view("welcome2")->with("datos", $datos);
    }

    public function index_Asignacion_Profesor(){
        $datos=DB::select("select * from asignacionprof");
        return view("welcome3")->with("datos", $datos);
    }

    public function index_Asignacion_Estudiante(){
        $datos=DB::select("select * from asignacionest");
        return view("welcome4")->with("datos", $datos);
    }

    public function create_Estudiante(añadirEstFormRequest $request){
        
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

    public function create_Profesor(añadirProfFormRequest $request){
        
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

    public function create_Asignacion_Estudiante(añadirasigestFormRequest $request){
        
        try{
        $sql=DB::insert("insert into asignacionest(id,identificacion,nombre,asigcurso,asiggrupo) value(?,?,?,?,?)",[
            $request->txtcodigo,
            $request->txtidentificacion,
            $request->txtnombre,
            $request->txtasigcur,
            $request->txtasiggrup,
        ]);
    }catch(\Throwable $th){
        $sql=0;
    }
        if($sql == true){
            return back()->with("correcto", "Asignacion estudiante registrada correctamente");
        } else{
            return back()->with("incorrecto", "Error al asignar");
        }
    }

    public function create_Asignacion_Profesor(añadirasigproFormRequest $request){
        
        try{
        $sql=DB::insert("insert into asignacionprof(id,identificacion,nombre,asigcurso,asiggrupo) value(?,?,?,?,?)",[
            $request->txtcodigo,
            $request->txtidentificacion,
            $request->txtnombre,
            $request->txtasigcur,
            $request->txtasiggrup,
        ]);
    }catch(\Throwable $th){
        $sql=0;
    }
        if($sql == true){
            return back()->with("correcto", "Asignacion profesor registrada correctamente");
        } else{
            return back()->with("incorrecto", "Error al asignar");
        }
    }

    public function update_Estudiante(añadirEstFormRequest $request){
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

    public function update_Profesor(añadirProfFormRequest $request){
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

    public function update_Asignacion_Estudiante(añadirasigestFormRequest $request){
        try{
            $sql=DB::update("update asignacionest set identificacion=?, nombre=?, asigcurso=?, asiggrupo=? where id=?",[
                $request->txtidentificacion,
                $request->txtnombre,
                $request->txtasigcur,
                $request->txtasiggrup,
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
            return back()->with("incorrecto", "Error al modificar Estudiante");
        }
    }

    public function update_Asignacion_Profesor(añadirasigproFormRequest $request){
        try{
            $sql=DB::update("update asignacionprof set identificacion=?, nombre=?, asigcurso=?, asiggrupo=? where id=?",[
                $request->txtidentificacion,
                $request->txtnombre,
                $request->txtasigcur,
                $request->txtasiggrup,
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
            return back()->with("incorrecto", "Error al modificar Profesor");
        }
    }

    public function delete_Estudiante($id){

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

    public function delete_Profesor($id){

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

    public function delete_Asignacion_Profesor($id){

        try{
            $sql=DB::delete("delete from asignacionprof where id=$id");
        }catch(\Throwable $th){
            $sql=0;
        }
        if($sql == true){
            return back()->with("correcto", "Profesor eliminado correctamente");
        } else{
            return back()->with("incorrecto", "Error al eliminar");
        }
    }

    public function delete_Asignacion_Estudiante($id){

        try{
            $sql=DB::delete("delete from asignacionest where id=$id");
        }catch(\Throwable $th){
            $sql=0;
        }
        if($sql == true){
            return back()->with("correcto", "Estudiante eliminado correctamente");
        } else{
            return back()->with("incorrecto", "Error al eliminar");
        }
    }
}






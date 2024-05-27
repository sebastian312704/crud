<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Http\FormRequest;
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

    public function Pagina_Admin()
    {
        return view ('Principal-Admin');
    }

    public function Pagina_Prof()
    {
        return view ('Principal-Prof');
    }

    public function Pagina_Est()
    {
        return view ('Principal-Est');
    }

    public function index4()
    {
        return view ('Vista-añad-notas');
    }

    public function index_Prof()
    {
        // Recuperar todos los datos de la tabla asig_notas
        $datos = DB::table('asig_notas')
                    ->select('nameAsignatura', 'nameNota', 'nmCalificacion')
                    ->get();

        // Pasar los datos a la vista y retornar la vista
        return view("Visualizar-prof")->with("datos", $datos);

    }

    public function index_Est()
    {
        // Recuperar todos los datos de la tabla asig_notas
        $datos = DB::table('asig_notas')
                    ->select('nameAsignatura', 'nameNota', 'nmCalificacion')
                    ->get();

        // Pasar los datos a la vista y retornar la vista
        return view("Visualizar")->with("datos", $datos);

    }
    
    public function index_Registrar_Estudiante()
    {
        $datos = DB::select("select * from registros");
        return view("Vista-añad-Est")->with("datos", $datos);
    }

    public function index_Registrar_Profesor()
    {
        $datos = DB::select("select * from registros1");
        return view("Vista-añad-Prof")->with("datos", $datos);
    }

    public function index_Asignacion_Profesor()
    {
        $datos = DB::select("select * from asignacionprof");
        return view("Vista-asig-Profe")->with("datos", $datos);
    }

    public function index_Asignacion_Estudiante()
    {
        $datos = DB::select("select * from asignacionest");
        return view("Vista-asig-Est")->with("datos", $datos);
    }

    public function añadir_nota(Request $request)
    {

        $usuario = "root";
        $password = "";
        $servidor = "localhost";
        $basededatos = "laravel";
        $nameAsignatura = $_REQUEST['nameAsignatura'];
        $nameNota = $_REQUEST['nameNota'];
        $nmCalificacion = $_REQUEST['nmCalificacion'];
        //dd($request);
        $con = mysqli_connect($servidor, $usuario, $password) or die("No se ha podido conectar al Servidor");
        $db = mysqli_select_db($con, $basededatos) or die("Upps! Error en conectar a la Base de Datos");

        function codAleatorio($length = 5)
        {
            return substr(str_shuffle(str_repeat($x = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ', ceil($length / strlen($x)))), 1, $length);
        }
        $CODE_REFERENCIA = codAleatorio();


        for ($i = 0; $i < count($nmCalificacion); $i++) {

            $InserData = ("INSERT INTO asig_notas (nameAsignatura, nameNota, nmCalificacion,CODE_REFERENCIA) VALUES ('" . $nameAsignatura[$i] . "','" . $nameNota[$i] . "','" . $nmCalificacion[$i] . "','" . $CODE_REFERENCIA . "')");
            //dd($InserData);
            $resultadoInsertUser = mysqli_query($con, $InserData);

        }

        return view("Vista-añad-notas");
        
    }

    public function create_Estudiante(añadirEstFormRequest $request)
    {

        try {
            $sql = DB::insert("insert into registros(id,nombre,rol,usuario,identificacion,programa,email) value(?,?,?,?,?,?,?)", [
                $request->txtcodigo,
                $request->txtnombre,
                $request->txtrol,
                $request->txtusuario,
                $request->txtidentificacion,
                $request->txtprograma,
                $request->txtemail,
            ]);
        } catch (\Throwable $th) {
            $sql = 0;
        }
        if ($sql == true) {
            return back()->with("correcto", "Estudiante registrado correctamente");
        } else {
            return back()->with("incorrecto", "Error al registrar");
        }
    }

    public function create_Profesor(añadirProfFormRequest $request)
    {

        try {
            $sql = DB::insert("insert into registros1(id,nombre,rol,usuario,identificacion,email) value(?,?,?,?,?,?)", [
                $request->txtcodigo,
                $request->txtnombre,
                $request->txtrol,
                $request->txtusuario,
                $request->txtidentificacion,
                $request->txtemail,
            ]);
        } catch (\Throwable $th) {
            $sql = 0;
        }
        if ($sql == true) {
            return back()->with("correcto", "Profesor registrado correctamente");
        } else {
            return back()->with("incorrecto", "Error al registrar");
        }
    }

    public function create_Asignacion_Estudiante(añadirasigestFormRequest $request)
    {

        try {
            $sql = DB::insert("insert into asignacionest(id,identificacion,nombre,asigcurso,asiggrupo) value(?,?,?,?,?)", [
                $request->txtcodigo,
                $request->txtidentificacion,
                $request->txtnombre,
                $request->txtasigcur,
                $request->txtasiggrup,
            ]);
        } catch (\Throwable $th) {
            $sql = 0;
        }
        if ($sql == true) {
            return back()->with("correcto", "Asignacion estudiante registrada correctamente");
        } else {
            return back()->with("incorrecto", "Error al asignar");
        }
    }

    public function create_Asignacion_Profesor(añadirasigproFormRequest $request)
    {

        try {
            $sql = DB::insert("insert into asignacionprof(id,identificacion,nombre,asigcurso,asiggrupo) value(?,?,?,?,?)", [
                $request->txtcodigo,
                $request->txtidentificacion,
                $request->txtnombre,
                $request->txtasigcur,
                $request->txtasiggrup,
            ]);
        } catch (\Throwable $th) {
            $sql = 0;
        }
        if ($sql == true) {
            return back()->with("correcto", "Asignacion profesor registrada correctamente");
        } else {
            return back()->with("incorrecto", "Error al asignar");
        }
    }

    public function update_Estudiante(añadirEstFormRequest $request)
    {
        try {
            $sql = DB::update("update registros set nombre=?, rol=?, usuario=?, identificacion=?, programa=?, email=? where id=?", [
                $request->txtnombre,
                $request->txtrol,
                $request->txtusuario,
                $request->txtidentificacion,
                $request->txtprograma,
                $request->txtemail,
                $request->txtcodigo,
            ]);
            if ($sql == 0) {
                $sql = 1;
            }
        } catch (\Throwable $th) {
            $sql = 0;
        }
        if ($sql == true) {
            return back()->with("correcto", "Estudiante modificado correctamente");
        } else {
            return back()->with("incorrecto", "Error al modificar");
        }
    }

    public function update_Profesor(añadirProfFormRequest $request)
    {
        try {
            $sql = DB::update("update registros1 set nombre=?, rol=?, usuario=?, identificacion=?, email=? where id=?", [
                $request->txtnombre,
                $request->txtrol,
                $request->txtusuario,
                $request->txtidentificacion,
                $request->txtemail,
                $request->txtcodigo,
            ]);
            if ($sql == 0) {
                $sql = 1;
            }
        } catch (\Throwable $th) {
            $sql = 0;
        }
        if ($sql == true) {
            return back()->with("correcto", "Profesor modificado correctamente");
        } else {
            return back()->with("incorrecto", "Error al modificar");
        }
    }

    public function update_Asignacion_Estudiante(añadirasigestFormRequest $request)
    {
        try {
            $sql = DB::update("update asignacionest set identificacion=?, nombre=?, asigcurso=?, asiggrupo=? where id=?", [
                $request->txtidentificacion,
                $request->txtnombre,
                $request->txtasigcur,
                $request->txtasiggrup,
                $request->txtcodigo,
            ]);
            if ($sql == 0) {
                $sql = 1;
            }
        } catch (\Throwable $th) {
            $sql = 0;
        }
        if ($sql == true) {
            return back()->with("correcto", "Estudiante modificado correctamente");
        } else {
            return back()->with("incorrecto", "Error al modificar Estudiante");
        }
    }

    public function update_Asignacion_Profesor(añadirasigproFormRequest $request)
    {
        try {
            $sql = DB::update("update asignacionprof set identificacion=?, nombre=?, asigcurso=?, asiggrupo=? where id=?", [
                $request->txtidentificacion,
                $request->txtnombre,
                $request->txtasigcur,
                $request->txtasiggrup,
                $request->txtcodigo,
            ]);
            if ($sql == 0) {
                $sql = 1;
            }
        } catch (\Throwable $th) {
            $sql = 0;
        }
        if ($sql == true) {
            return back()->with("correcto", "Profesor modificado correctamente");
        } else {
            return back()->with("incorrecto", "Error al modificar Profesor");
        }
    }

    public function delete_Estudiante($id)
    {

        try {
            $sql = DB::delete("delete from registros where id=$id");
        } catch (\Throwable $th) {
            $sql = 0;
        }
        if ($sql == true) {
            return back()->with("correcto", "Estudiante eliminado correctamente");
        } else {
            return back()->with("incorrecto", "Error al eliminar");
        }
    }

    public function delete_Profesor($id)
    {

        try {
            $sql = DB::delete("delete from registros1 where id=$id");
        } catch (\Throwable $th) {
            $sql = 0;
        }
        if ($sql == true) {
            return back()->with("correcto", "Profesor eliminado correctamente");
        } else {
            return back()->with("incorrecto", "Error al eliminar");
        }
    }

    public function delete_Asignacion_Profesor($id)
    {

        try {
            $sql = DB::delete("delete from asignacionprof where id=$id");
        } catch (\Throwable $th) {
            $sql = 0;
        }
        if ($sql == true) {
            return back()->with("correcto", "Profesor eliminado correctamente");
        } else {
            return back()->with("incorrecto", "Error al eliminar");
        }
    }

    public function delete_Asignacion_Estudiante($id)
    {

        try {
            $sql = DB::delete("delete from asignacionest where id=$id");
        } catch (\Throwable $th) {
            $sql = 0;
        }
        if ($sql == true) {
            return back()->with("correcto", "Estudiante eliminado correctamente");
        } else {
            return back()->with("incorrecto", "Error al eliminar");
        }
    }
}

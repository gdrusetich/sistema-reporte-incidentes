<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AlumnosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


     //DB::insert();
     //DB::update();
     //DB::delete();
    public function index(Request $request)
    {
        $nroSocio=$request->get('nroSocio');        
        $nombre=$request->get('nombre');
        $apellido=$request->get('apellido');
        $dni=$request->get('dni');
        //METODO PARA SABER SI UNA KEY ESTÁ GENEADA.
        //$request->has('dni');
        //$alumnos = DB::select("SELECT * FROM alumno"); Select es un método estático de la clase DB.
        $alumnos = DB::table("alumno")
        ->select("*")
        ->where("nroSocio","like",$nroSocio."%")
        ->where("nombre","like","%".$nombre."%" )
        ->where("apellido","like","%".$apellido."%" )
        ->where("dni","like",$dni."%")
        ->get();

        $parametros =[
            "arrayAlumnos"=> $alumnos,
            "titulo"=>"Esta es la tabla de alumnos"
        ];

        return view("alumnos.alumnos",$parametros);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $parametros =[
            "titulo"=> "Formulario de Alta de Alumno"
        ];
        return view("alumnos.crear_alumno",$parametros);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $nroSocio = $request->post("nroSocio");
        $nombre = $request->post("nombre");
        $apellido = $request->post("apellido");
        $dni=$request->post("dni");

//        $parametros = $request->post(); Para no agregar a todos los post

//        DB::insert("INSERT INTO alumno (nroSocio, nombre, apellido, dni) VALUES (?,?,?,?)",[$nroSocio,$nombre,$apellido,$dni]);   Tiene Un Error
            DB::table("alumno")->insert([
                "nroSocio"=>$nroSocio,
                "nombre"=>$nombre,
                "apellido"=>$apellido,
                "dni"=>$dni
            ]);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return "Esto es el método Show del AlumnoController del Alumno: ".$id;

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

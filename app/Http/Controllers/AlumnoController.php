<?php

namespace App\Http\Controllers;

use App\Models\alumno;
use Illuminate\Http\Request;

class AlumnoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $alumnos = alumno::All();//Este es el modelo
        return view("alumnos", ['alumnos' => $alumnos]);//Si en la ruta pones /alumnos, te lleva a alumnos.blade
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $alumnos = alumno::All();//Este es el modelo
        return view("create", ['alumnos' => $alumnos]);//Si en la ruta pones /create, te lleva a create.blade
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        //$datosAlumno = request()->all();
        $datosAlumno = request()->except('_token');

        Alumno::insert($datosAlumno);//Alumno es el model //Es la forma de introducir en una BBDD con laravel

        return response()->json($datosAlumno);
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\alumno $alumno
     * @return \Illuminate\Http\Response
     */
    public function show(alumno $alumno)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\alumno $alumno
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $alumno=alumno::findOrFail($id);

        return view('edit', compact('alumno'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\alumno $alumno
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $datosAlumno = request()->except(['_token', '_method']);
        Alumno::where('id', '=', $id)->update($datosAlumno);

        $alumno=alumno::findOrFail($id);
        return view('edit', compact('alumno'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\alumno $alumno
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        alumno :: destroy($id);

        return redirect('alumnos');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Estudiante;
use App\Models\Profesor;
use App\Models\Materia;



class SistemaController extends Controller
{
    public function inicio()
    {
        return view('inicio');
    }

    public function estudiantes()
    {
        $estudiantes = Estudiante::all();
        return view('estudiantes', compact('estudiantes'));   

    }

    public function profesores()
    {
        $profesores = Profesor::all();
        return view('profesores', compact('profesores'));   

    }

    public function materias()
    {
        $materias = Materia::all();
        return view('materias', compact('materias'));
    }

    public function crearEstudiante()
    {
        return view('crear_estudiante');
    }
    
    public function guardarEstudiante(Request $request)
    {
        Estudiante::create([
            'nombre' => $request->nombre,
            'apellido' => $request->apellido,
            'correo' => $request->correo,
            'programa' => $request->programa
        ]);

        return redirect('/estudiantes');
    }

        public function crearProfesor()
    {
        return view('crear_profesor');
    }

    public function guardarProfesor(Request $request)
    {
        Profesor::create([
            'nombre' => $request->nombre,
            'apellido' => $request->apellido,
            'correo' => $request->correo,
        ]);

        return redirect('/profesores');
    }

    public function crearMateria()
    {
        return view('crear_materia');
    }

    public function guardarMateria(Request $request)
    {
        Materia::create([
            'nombre' => $request->nombre,
            'creditos' => $request->creditos,
        ]);

        return redirect('/materias');
    }

}


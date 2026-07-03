<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Estudiante;
use App\Models\Profesor;
use App\Models\Materia;
use App\Models\Inscripcion;
use App\Models\Nota;
use App\Models\Asistencia;

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
        $request->validate([
            'nombre' => 'required|string|max:255',
            'apellido' => 'required|string|max:255',
            'correo' => 'required|email|unique:estudiantes,correo',
            'programa' => 'required|string|max:255',
            'password' => 'required|string|min:6'
        ]);

        Estudiante::create([
            'nombre' => $request->nombre,
            'apellido' => $request->apellido,
            'correo' => $request->correo,
            'programa' => $request->programa,
            'password' => $request->password
        ]);

        return redirect('/estudiantes')->with('success', 'Estudiante creado correctamente.');
    }

    public function crearProfesor()
    {
        return view('crear_profesor');
    }

    public function guardarProfesor(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'apellido' => 'required|string|max:255',
            'correo' => 'required|email|unique:profesores,correo',
            'password' => 'required|string|min:6'
        ]);

        Profesor::create([
            'nombre' => $request->nombre,
            'apellido' => $request->apellido,
            'correo' => $request->correo,
            'password' => $request->password
        ]);

        return redirect('/profesores')->with('success', 'Profesor creado correctamente.');
    }

    public function crearMateria()
    {
        return view('crear_materia');
    }

    public function guardarMateria(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'creditos' => 'required|integer|min:1|max:10'
        ]);

        Materia::create([
            'nombre' => $request->nombre,
            'creditos' => $request->creditos,
        ]);

        return redirect('/materias')->with('success', 'Materia creada correctamente.');
    }

    public function inscripciones()
    {
        $inscripciones = Inscripcion::with('estudiante', 'materia')->get();
        return view('inscripciones.index', compact('inscripciones'));
    }

    public function crearInscripcion()
    {
        $estudiantes = Estudiante::all();
        $materias = Materia::all();
        return view('inscripciones.crear', compact('estudiantes', 'materias'));
    }

    public function guardarInscripcion(Request $request)
    {
        $request->validate([
            'estudiante_id' => 'required|exists:estudiantes,id',
            'materia_id' => 'required|exists:materias,id'
        ]);

        Inscripcion::create([
            'estudiante_id' => $request->estudiante_id,
            'materia_id' => $request->materia_id
        ]);

        return redirect('/inscripciones')->with('success', 'Inscripcion creada correctamente.');
    }

    public function notas()
    {
        $notas = Nota::with('inscripcion.estudiante', 'inscripcion.materia')->get();
        return view('notas.index', compact('notas'));
    }

    public function crearNota()
    {
        $inscripciones = Inscripcion::with('estudiante', 'materia')->get();
        return view('notas.crear', compact('inscripciones'));
    }

    public function guardarNota(Request $request)
    {
        $request->validate([
            'inscripcion_id' => 'required|exists:inscripciones,id',
            'nota' => 'required|numeric|min:0|max:5',
            'tipo' => 'required|in:parcial1,parcial2,final'
        ]);

        Nota::create([
            'inscripcion_id' => $request->inscripcion_id,
            'nota' => $request->nota,
            'tipo' => $request->tipo
        ]);

        return redirect('/notas')->with('success', 'Nota registrada correctamente.');
    }

    public function asistencias()
    {
        $asistencias = Asistencia::with('estudiante', 'materia')->get();
        return view('asistencias.index', compact('asistencias'));
    }

    public function crearAsistencia()
    {
        $estudiantes = Estudiante::all();
        $materias = Materia::all();
        return view('asistencias.crear', compact('estudiantes', 'materias'));
    }

    public function guardarAsistencia(Request $request)
    {
        $request->validate([
            'estudiante_id' => 'required|exists:estudiantes,id',
            'materia_id' => 'required|exists:materias,id',
            'fecha' => 'required|date',
            'presente' => 'nullable|boolean'
        ]);

        Asistencia::create([
            'estudiante_id' => $request->estudiante_id,
            'materia_id' => $request->materia_id,
            'fecha' => $request->fecha,
            'presente' => $request->has('presente')
        ]);

        return redirect('/asistencias')->with('success', 'Asistencia registrada correctamente.');
    }
}

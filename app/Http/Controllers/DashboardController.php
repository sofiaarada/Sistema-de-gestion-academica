<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Inscripcion;
use App\Models\Asistencia;
use App\Models\Materia;

class DashboardController extends Controller
{
    public function estudiante()
    {
        $estudiante = Auth::guard('estudiante')->user();
        $inscripciones = Inscripcion::where('estudiante_id', $estudiante->id)
            ->with('materia', 'notas')
            ->get();

        $asistencias = Asistencia::where('estudiante_id', $estudiante->id)
            ->with('materia')
            ->get();

        return view('dashboard.estudiante', compact('estudiante', 'inscripciones', 'asistencias'));
    }

    public function profesor()
    {
        $profesor = Auth::guard('profesor')->user();
        return view('dashboard.profesor', compact('profesor'));
    }

    public function notasEstudiante($id)
    {
        $estudiante = Auth::guard('estudiante')->user();
        $inscripcion = Inscripcion::with('materia', 'notas', 'estudiante')
            ->where('id', $id)
            ->where('estudiante_id', $estudiante->id)
            ->firstOrFail();

        return view('dashboard.notas_estudiante', compact('inscripcion'));
    }

    public function matricularForm()
    {
        $estudiante = Auth::guard('estudiante')->user();
        $materiasInscritas = Inscripcion::where('estudiante_id', $estudiante->id)->pluck('materia_id');
        $materiasDisponibles = Materia::whereNotIn('id', $materiasInscritas)->get();
        
        return view('dashboard.matricular', compact('materiasDisponibles'));
    }

    public function matricularGuardar(Request $request)
    {
        $request->validate([
            'materia_id' => 'required|exists:materias,id'
        ]);

        $estudiante = Auth::guard('estudiante')->user();

        // Check if already enrolled to avoid duplicates
        $exists = Inscripcion::where('estudiante_id', $estudiante->id)
                             ->where('materia_id', $request->materia_id)
                             ->exists();
                             
        if ($exists) {
            return back()->withErrors(['materia_id' => 'Ya estás inscrito en esta materia.']);
        }

        Inscripcion::create([
            'estudiante_id' => $estudiante->id,
            'materia_id' => $request->materia_id
        ]);

        return redirect('/dashboard/estudiante')->with('success', 'Te has matriculado exitosamente en la materia.');
    }
}

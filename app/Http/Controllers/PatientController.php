<?php

namespace App\Http\Controllers;

use App\Models\OrigineSurdite;
use Illuminate\Http\Request;
use App\Models\Patient;
class PatientController extends Controller
{
    public function index()
    {
        $patients = Patient::all();
        return view('patients.index', compact('patients'));
    }

    public function add_patient(Request $request)
    {
        $origines = OrigineSurdite::all();
        return view('patients.add_patient', compact('origines'));
    }

    public function store(Request $request) {

        $validated = $request->validate([
            'nom' => 'required|string|max:255',
            'prenom' => 'required|string|max:255',
            'dateNaissance' => 'required|date',
            'ageDepistageSurdite' => 'nullable|integer',
            'agePremierImplant' => 'nullable|integer',
            'ageDeuxiemeImplant' => 'nullable|integer',
            'idOrigineSurdite' => 'nullable|exists:origineSurdite,id',
        ]);

        Patient::create($validated);
        return redirect()->route('patients.index');
}
}

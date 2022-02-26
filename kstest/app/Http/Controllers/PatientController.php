<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use Illuminate\Http\Request;

class PatientController extends Controller
{
    public function index()
    {
        return Patient::all();
    }

    public function store(Request $request)
    {

    }

    public function update(Request $request, Patient $patient)
    {
        # code...
    }

    public function destroy(Patient $patient)
    {
        # code...
    }
}

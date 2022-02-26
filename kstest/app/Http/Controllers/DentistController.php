<?php

namespace App\Http\Controllers;

use App\Models\Dentist;
use Illuminate\Http\Request;

class DentistController extends Controller
{
    public function index()
    {
        return Dentist::all();
    }

    public function store(Request $request)
    {

    }

    public function update(Request $request, Dentist $dentist)
    {
        # code...
    }

    public function destroy(Dentist $dentist)
    {
        # code...
    }
}

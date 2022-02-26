<?php

namespace App\Http\Controllers;

use App\Models\Treatment;
use Illuminate\Http\Request;

class TreatmentController extends Controller
{
    public function index()
    {
        return Treatment::all();
    }

    public function store(Request $request)
    {

    }

    public function update(Request $request, Treatment $treatment)
    {
        # code...
    }

    public function destroy(Treatment $treatment)
    {
        # code...
    }
}

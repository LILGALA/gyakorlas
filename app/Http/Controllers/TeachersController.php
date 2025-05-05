<?php

namespace App\Http\Controllers;

use App\Models\Teachers;
use Illuminate\Http\Request;

class TeachersController extends Controller
{
    public function getTeacher()
    {
        $teachers = Teachers::query()
        ->with(['students'])
        ->get();

        return response()->json($teachers);
    }

    public function createTeacher(Request $request)
    {
        $teachers = Teachers::create($request->all());

        return response()->json($teachers, 201);
    }

    public function updateTeacher(Request $request, Teachers $teachers)
    {
        $teachers->update($request->all());
        $teachers->save();

        return response()->json($teachers);
    }

    public function deleteTeacher(Teachers $teachers)
    {
        $teachers->delete();
        
        return response()->json('', 204);
    }
    
}

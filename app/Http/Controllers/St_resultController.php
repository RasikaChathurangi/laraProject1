<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\St_result;
class St_resultController extends Controller
{
    public function filter(Request $request)
    {
        $studentNumber = $request->input('student_number');
        $subject = $request->input('subject');
    

        $results = St_result::where('student_number', $studentNumber)
                            ->where('subject', $subject)
                            ->get();

        return view('results.index', ['results' => $results]);
    } 
}

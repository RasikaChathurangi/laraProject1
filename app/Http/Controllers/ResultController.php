<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Result;
class ResultController extends Controller
{

public function index()
{
    $results = Result::all(); // Retrieve all student results from the database

    return view('results.index', ['results' => $results]);
}


    public function index()
{
    // Show the data entry form
    return view('results.create');
}

public function store(Request $request)
{
    // Validate the request
    $request->validate([
        'student_id' => 'required',
        'subject' => 'required',
        'score' => 'required|numeric',
    ]);

    // Create and save the result
    Result::create($request->all());

    // Redirect back or to a success page
    return redirect('/results')->with('success', 'Result added successfully');
}

}

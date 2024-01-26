<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="{{ asset('CSS/result.css') }}">
</head>
<body>

<h2>Students Result</h2>
<p>Hi.....Welcome here</p>

<div class="line">

        <div class="dropdown">
        <button class="dropbtn">Select Level</button>
        <select>
                <option class="dropdown-btn" value="basic">All</option>
                <option class="dropdown-btn" value="post">Level 1</option>
                <option class="dropdown-btn" value="post">Level 2</option>
                <option class="dropdown-btn" value="post">Level 3</option>
        </select>
        </div> 
                
        <div class="dropdown">
        <button class="dropbtn">Select Semester</button>
        <select >
                <option class="dropdown-btn" value="basic">All</option>
                <option class="dropdown-btn" value="post">Semester 1</option>
                <option class="dropdown-btn" value="post">Semester 2</option>
        </select>
        </div>

        <div class="dropdown">
        <button class="dropbtn">Select Subject</button>
        <select name="degree" id="degree">
                <option class="dropdown-btn" value="basic">All</option>
                <option class="dropdown-btn" value="post">Physics</option>
                <option class="dropdown-btn" value="post">CS</option>
                <option class="dropdown-btn" value="post">Math</option>
        </select>
        </div>

</div>
<!--
<div class="table-data">
        <table style="width:100%">
                <tr>
                        <th>Course Code</th>
                        <th>Subject</th>
                        <th>Result</th>
                </tr>
                <tr>
                        <td>jjdk</td>
                        <td>vdl</td>
                        <td>vlpdl</td>
                </tr>


        </table>
</div>

@extends('layouts.app') // Extend your main layout

@section('content')
<h1>Student Results</h1>

<table>
    <thead>
        <tr>
            <th>Student ID</th>
            <th>Subject</th>
            <th>Score</th>
        </tr>
    </thead>
    <tbody>
        @foreach($results as $result)
            <tr>
                <td>{{ $result->student_id }}</td>
                <td>{{ $result->subject }}</td>
                <td>{{ $result->score }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection

-->
</body>
</html>
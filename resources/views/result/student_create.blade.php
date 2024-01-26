@extends('layouts.app') // Extend your main layout

@section('content')
<h1>Enter Student Results</h1>

<form method="POST" action="{{ route('results.store') }}">
    @csrf
    <div class="form-group">
        <label for="student_id">Student ID:</label>
        <input type="text" name="student_id" id="student_id" class="form-control" required>
    </div>

    <div class="form-group">
        <label for="subject">Subject:</label>
        <input type="text" name="subject" id="subject" class="form-control" required>
    </div>

    <div class="form-group">
        <label for="score">Score:</label>
        <input type="number" name="score" id="score" class="form-control" required>
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection

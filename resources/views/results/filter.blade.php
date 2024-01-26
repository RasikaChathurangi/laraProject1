<!-- resources/views/your-existing-view.blade.php -->

<form action="{{ route('filter.results') }}" method="get">
    @csrf
    <label for="student_number">Student Number:</label>
    <input type="text" name="student_number" required>

    <label for="subject">Subject:</label>
    <input type="text" name="subject" required>

    <button type="submit">Filter Results</button>
</form>

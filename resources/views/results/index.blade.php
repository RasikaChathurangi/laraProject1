

<h1>Filtered Results</h1>

<table>
    <thead>
        <tr>
            <th>Student Name</th>
            <th>Student Number</th>
            <th>Subject</th>
            <th>Result</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($results as $result)
            <tr>
                <td>{{ $result->student_name }}</td>
                <td>{{ $result->student_number }}</td>
                <td>{{ $result->subject }}</td>
                <td>{{ $result->result }}</td>
            </tr>
        @endforeach
    </tbody>
</table>

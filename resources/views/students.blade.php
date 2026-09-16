<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student List</title>
</head>
<body>
    <nav>
        <a href="{{ url('/products') }}">Products</a>
        <a href="{{ url('/students') }}">Students</a>
    </nav>

    <h1>Student List:</h1>

    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Address</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($students as $student)
                <tr>
                    <td>{{ $student->id }}</td>
                    <td>{{ $student->name }}</td>
                    <td>{{ $student->email }}</td>
                    <td>{{ $student->address }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="4">No students found.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</body>
</html>
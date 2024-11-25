<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Section4_1 List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<a class="btn btn-primary" href="{{route('admin.dashboard')}}" >back to dashboard</a>
    <div class="container mt-4">
        <h1 class="text-center text-primary mb-4">Section4_1 List</h1>

        <a href="{{ route('section4_1s.create') }}" class="btn btn-primary mb-3">Add New Section4_1</a>

        @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Education</th>
                    <th>From Where</th>
                    <th>Details</th>
                    <th>GPA</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($section4_1s as $section4_1)
                    <tr>
                        <td>{{ $section4_1->education }}</td>
                        <td>{{ $section4_1->from_where }}</td>
                        <td>{{ Str::limit($section4_1->details, 50) }}</td>
                        <td>{{ $section4_1->gpa }}</td>
                        <td>
                            <a href="{{ route('section4_1s.show', $section4_1->id) }}" class="btn btn-info btn-sm">View</a>
                            <a href="{{ route('section4_1s.edit', $section4_1->id) }}" class="btn btn-primary btn-sm">Edit</a>
                            <form action="{{ route('section4_1s.destroy', $section4_1->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

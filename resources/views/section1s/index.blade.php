<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Section1 List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .container {
            max-width: 1200px;
        }
        .btn-custom {
            background-color: #007bff;
            color: white;
        }
        .table th {
            background-color: #007bff;
            color: white;
        }
    </style>
</head>
<body>
<a class="btn btn-primary" href="{{route('admin.dashboard')}}" >back to dashboard</a>
    <div class="container mt-4">
        <h1 class="mb-4 text-center text-primary">Section1 List</h1>

        <!-- Success Message -->
        @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <a href="{{ route('section1s.create') }}" class="btn btn-custom mb-3">Add New Section1</a>

        @if($section1s->isEmpty())
            <div class="alert alert-warning">No records found.</div>
        @else
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Job</th>
                        <th>Description</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($section1s as $section1)
                    <tr>
                        <td>{{ $section1->id }}</td>
                        <td>{{ $section1->name }}</td>
                        <td>{{ $section1->job }}</td>
                        <td>{{ Str::limit($section1->description, 50) }}</td>
                        <td>
                            <a href="{{ route('section1s.show', $section1->id) }}" class="btn btn-info btn-sm">View</a>
                            <a href="{{ route('section1s.edit', $section1->id) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('section1s.destroy', $section1->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this item?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

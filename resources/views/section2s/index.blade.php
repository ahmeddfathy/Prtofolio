<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Section2 List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .container {
            max-width: 800px;
        }
        .btn-custom {
            background-color: #007bff;
            color: white;
        }
        .btn-danger-custom {
            background-color: #dc3545;
            color: white;
        }
        .btn-back {
            background-color: #6c757d;
            color: white;
        }
    </style>
</head>
<body>
<a class="btn btn-primary" href="{{route('admin.dashboard')}}" >back to dashboard</a>
    <div class="container mt-4">
        <h1 class="text-center text-primary mb-4">Section2 List</h1>

        <a href="{{ route('section2s.create') }}" class="btn btn-custom mb-3">Add New Section2</a>

        <!-- Display success message -->
        @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <table class="table table-bordered table-striped">
            <thead class="thead-dark">
                <tr>
                    <th>Icon Name</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($section2s as $section2)
                    <tr>
                        <td>{{ $section2->icon_name }}</td>
                        <td>{{ $section2->title }}</td>
                        <td>{{ Str::limit($section2->description, 50) }}</td>
                        <td>
                            <a href="{{ route('section2s.show', $section2->id) }}" class="btn btn-info btn-sm">View</a>
                            <a href="{{ route('section2s.edit', $section2->id) }}" class="btn btn-primary btn-sm">Edit</a>
                            <form action="{{ route('section2s.destroy', $section2->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <a href="{{ route('section2s.index') }}" class="btn btn-back mt-3">Back to List</a>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Section3 List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<a class="btn btn-primary" href="{{route('admin.dashboard')}}" >back to dashboard</a>
    <div class="container mt-4">
        <h1 class="text-center text-primary mb-4">Section3 List</h1>

        <a href="{{ route('section3s.create') }}" class="btn btn-primary mb-3">Add New Section3</a>

        @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Image Link</th>
                    <th>Title</th>
                    <th>Demo</th>
                    <th>Description</th>

                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($section3s as $section3)
                    <tr>
                        <td><a href="{{ $section3->image_link }}" target="_blank">View Image</a></td>
                        <td>{{ $section3->title }}</td>
                        <td>{{ $section3->demo }}</td>
                        <td>{{ Str::limit($section3->description, 50) }}</td>
                        <td>
                            <a href="{{ route('section3s.show', $section3->id) }}" class="btn btn-info btn-sm">View</a>
                            <a href="{{ route('section3s.edit', $section3->id) }}" class="btn btn-primary btn-sm">Edit</a>
                            <form action="{{ route('section3s.destroy', $section3->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <a href="{{ route('section3s.index') }}" class="btn btn-secondary mt-3">Back to List</a>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

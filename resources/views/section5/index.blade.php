<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Section 5 - Index</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<a class="btn btn-primary" href="{{route('admin.dashboard')}}" >back to dashboard</a>
    <div class="container mt-5">
        <h1 class="text-center">Section 5 Records</h1>
        <a href="{{ route('section5.create') }}" class="btn btn-primary mb-3">Add New</a>

        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <table class="table table-bordered">
            <thead class="table-dark">
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Role</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse($section5s as $section5)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $section5->name }}</td>
                        <td>{{ $section5->role }}</td>
                        <td>
                            <a href="{{ route('section5.show', $section5->id) }}" class="btn btn-info btn-sm">View</a>
                            <a href="{{ route('section5.edit', $section5->id) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('section5.destroy', $section5->id) }}" method="POST" style="display:inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4" class="text-center">No records found.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</body>
</html>

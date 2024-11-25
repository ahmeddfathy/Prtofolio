<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Experience List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<a class="btn btn-primary" href="{{route('admin.dashboard')}}" >back to dashboard</a>
    <div class="container mt-4">
        <h1 class="text-center mb-4">Experiences</h1>
        <a href="{{ route('experiences.create') }}" class="btn btn-success mb-3">Add Experience</a>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Job Title</th>
                    <th>Company Name</th>
                    <th>Start Date</th>
                    <th>End Date</th>
                    <th>Location</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($experiences as $experience)
                <tr>
                    <td>{{ $experience->id }}</td>
                    <td>{{ $experience->job_title }}</td>
                    <td>{{ $experience->company_name }}</td>
                    <td>{{ $experience->start_date }}</td>
                    <td>{{ $experience->end_date ?? 'Present' }}</td>
                    <td>{{ $experience->location }}</td>
                    <td>
                        <a href="{{ route('experiences.show', $experience->id) }}" class="btn btn-info btn-sm">View</a>
                        <a href="{{ route('experiences.edit', $experience->id) }}" class="btn btn-primary btn-sm">Edit</a>
                        <form action="{{ route('experiences.destroy', $experience->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>

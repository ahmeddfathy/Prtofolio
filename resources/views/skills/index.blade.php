<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Skills List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center mb-4">Skills List</h1>
        <a href="{{ route('skills.create') }}" class="btn btn-primary mb-3">Add Skill</a>
        <table class="table table-hover table-bordered">
            <thead class="table-dark">
                <tr>
                    <th>#</th>
                    <th>Skill</th>
                    <th>Progress</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($skills as $skill)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $skill->skill }}</td>
                        <td>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: {{ $skill->progress }}%;" aria-valuenow="{{ $skill->progress }}" aria-valuemin="0" aria-valuemax="100">
                                    {{ $skill->progress }}%
                                </div>
                            </div>
                        </td>
                        <td>
                            <a href="{{ route('skills.show', $skill->id) }}" class="btn btn-info btn-sm">View</a>
                            <a href="{{ route('skills.edit', $skill->id) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('skills.destroy', $skill->id) }}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4" class="text-center">No skills found.</td>
                    </tr>

                @endforelse
            </tbody>
        </table>
        <a class="btn btn-primary" href="{{route('admin.dashboard')}}" >back to dashboard</a>
    </div>


</body>
</html>

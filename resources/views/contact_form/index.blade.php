<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Forms</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<a class="btn btn-primary" href="{{route('admin.dashboard')}}" >back to dashboard</a>
    <div class="container mt-5">
        <h1>Contact Forms</h1>
        <a href="{{ route('contact_form.create') }}" class="btn btn-primary mb-3">Add New</a>

        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <table class="table table-bordered">
            <thead class="table-dark">
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Phone</th>
                    <th>Email</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse($contactForms as $form)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $form->name }}</td>
                        <td>{{ $form->phone }}</td>
                        <td>{{ $form->email }}</td>
                        <td>
                            <a href="{{ route('contact_form.show', $form->id) }}" class="btn btn-info btn-sm">View</a>
                            <a href="{{ route('contact_form.edit', $form->id) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('contact_form.destroy', $form->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="text-center">No records found.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</body>
</html>

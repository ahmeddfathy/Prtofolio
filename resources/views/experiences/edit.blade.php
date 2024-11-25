<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Experience</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<a class="btn btn-primary" href="{{route('admin.dashboard')}}" >back to dashboard</a>
    <div class="container mt-4">
        <h1 class="text-center mb-4">Edit Experience</h1>
        <form action="{{ route('experiences.update', $experience->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="job_title" class="form-label">Job Title</label>
                <input type="text" name="job_title" class="form-control" value="{{ old('job_title', $experience->job_title) }}" required>
            </div>
            <div class="mb-3">
                <label for="company_name" class="form-label">Company Name</label>
                <input type="text" name="company_name" class="form-control" value="{{ old('company_name', $experience->company_name) }}" required>
            </div>
            <div class="mb-3">
                <label for="start_date" class="form-label">Start Date</label>
                <input type="date" name="start_date" class="form-control" value="{{ old('start_date', $experience->start_date) }}" required>
            </div>
            <div class="mb-3">
                <label for="end_date" class="form-label">End Date</label>
                <input type="date" name="end_date" class="form-control" value="{{ old('end_date', $experience->end_date) }}">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea name="description" class="form-control" rows="4" required>{{ old('description', $experience->description) }}</textarea>
            </div>
            <div class="mb-3">
                <label for="location" class="form-label">Location</label>
                <input type="text" name="location" class="form-control" value="{{ old('location', $experience->location) }}" required>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
            <a href="{{ route('experiences.index') }}" class="btn btn-secondary">Back to List</a>
        </form>
    </div>
</body>
</html>

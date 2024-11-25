<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Experience Details</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<a class="btn btn-primary" href="{{route('admin.dashboard')}}" >back to dashboard</a>
    <div class="container mt-4">
        <h1 class="text-center mb-4">Experience Details</h1>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Job Title: {{ $experience->job_title }}</h5>
                <h6 class="card-subtitle mb-2 text-muted">Company Name: {{ $experience->company_name }}</h6>
                <p class="card-text">
                    <strong>Start Date:</strong> {{ $experience->start_date }}<br>
                    <strong>End Date:</strong> {{ $experience->end_date ?? 'Present' }}<br>
                    <strong>Location:</strong> {{ $experience->location }}<br>
                    <strong>Description:</strong> {{ $experience->description }}
                </p>
                <a href="{{ route('experiences.index') }}" class="btn btn-secondary">Back to List</a>
            </div>
        </div>
    </div>
</body>
</html>

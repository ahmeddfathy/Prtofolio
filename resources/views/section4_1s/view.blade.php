<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Section4_1</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<a class="btn btn-primary" href="{{route('admin.dashboard')}}" >back to dashboard</a>
    <div class="container mt-4">
        <h1 class="text-center text-primary mb-4">View Section4_1</h1>

        <div class="mb-3">
            <strong>Education:</strong> {{ $section4_1->education }}
        </div>

        <div class="mb-3">
            <strong>From Where:</strong> {{ $section4_1->from_where }}
        </div>

        <div class="mb-3">
            <strong>Details:</strong> {{ $section4_1->details }}
        </div>

        <div class="mb-3">
            <strong>GPA:</strong> {{ $section4_1->gpa }}
        </div>

        <a href="{{ route('section4_1s.index') }}" class="btn btn-secondary">Back to List</a>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

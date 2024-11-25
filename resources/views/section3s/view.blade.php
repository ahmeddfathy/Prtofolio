<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Section3</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
   <a class="btn btn-primary" href="{{route('admin.dashboard')}}" >back to dashboard</a>
    <div class="container mt-4">
        <h1 class="text-center text-primary mb-4">View Section3</h1>

        <div class="mb-3">
            <strong>Image Link:</strong> <a href="{{ $section3->image_link }}" target="_blank">View Image</a>
        </div>

        <div class="mb-3">
            <strong>Title:</strong> {{ $section3->title }}
        </div>

        <div class="mb-3">
            <strong>Description:</strong> {{ $section3->description }}
        </div>
        <div class="mb-3">
            <strong>Demo:</strong> {{ $section3->demo }}
        </div>

        <a href="{{ route('section3s.index') }}" class="btn btn-secondary">Back to List</a>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

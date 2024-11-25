<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Section2</title>
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
        .btn-back {
            background-color: #6c757d;
            color: white;
        }
    </style>
</head>
<body>
    
<a class="btn btn-primary" href="{{route('admin.dashboard')}}" >back to dashboard</a>
    <div class="container mt-4">
        <h1 class="text-center text-primary mb-4">View Section2</h1>

        <div class="mb-3">
            <strong>Icon Name:</strong> {{ $section2->icon_name }}
        </div>

        <div class="mb-3">
            <strong>Title:</strong> {{ $section2->title }}
        </div>

        <div class="mb-3">
            <strong>Description:</strong> {{ $section2->description }}
        </div>

        <a href="{{ route('section2s.index') }}" class="btn btn-back">Back to List</a>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

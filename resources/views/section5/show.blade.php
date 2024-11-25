<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Section 5 Record</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<a class="btn btn-primary" href="{{route('admin.dashboard')}}" >back to dashboard</a>
    <div class="container mt-5">
        <h1 class="text-center">View Record</h1>
        <div class="p-4 border rounded">
            <p><strong>Name:</strong> {{ $section5->name }}</p>
            <p><strong>Role:</strong> {{ $section5->role }}</p>
            <p><strong>Content:</strong> {{ $section5->content }}</p>
            <p><strong>Phone:</strong> {{ $section5->phone }}</p>
            <p><strong>Email:</strong> {{ $section5->email }}</p>
            <p><strong>Facebook:</strong> <a href="{{ $section5->facebook_link }}" target="_blank">{{ $section5->facebook_link }}</a></p>
            <p><strong>LinkedIn:</strong> <a href="{{ $section5->linkedin_link }}" target="_blank">{{ $section5->linkedin_link }}</a></p>
            <p><strong>Instagram:</strong> <a href="{{ $section5->instagram_link }}" target="_blank">{{ $section5->instagram_link }}</a></p>
        </div>
        <a href="{{ route('section5.index') }}" class="btn btn-primary mt-3">Back to List</a>
    </div>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Section1</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .container {
            max-width: 800px;
        }
        .card {
            margin-top: 20px;
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
        <h1 class="mb-4 text-center text-primary">Section1 Details</h1>

        <!-- Display success or error message -->
        @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @elseif(session('error'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ session('error') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <!-- Display Section1 Details in Card -->
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">{{ $section1->name }}</h5>
                <p class="card-text"><strong>Job:</strong> {{ $section1->job }}</p>
                <p class="card-text"><strong>Description:</strong> {{ $section1->description }}</p>
                <p class="card-text"><strong>Facebook Link:</strong> <a href="{{ $section1->facebook_link }}" target="_blank">{{ $section1->facebook_link }}</a></p>
                <p class="card-text"><strong>Instagram Link:</strong> <a href="{{ $section1->instgram_link }}" target="_blank">{{ $section1->instgram_link }}</a></p>
                <p class="card-text"><strong>LinkedIn Link:</strong> <a href="{{ $section1->linkedin_link }}" target="_blank">{{ $section1->linkedin_link }}</a></p>
                <p class="card-text"><strong>Image 1:</strong> {{ $section1->image1 }}</p>
                <p class="card-text"><strong>Image 2:</strong> {{ $section1->image2 }}</p>
                <p class="card-text"><strong>Image 3:</strong> {{ $section1->image3 }}</p>
            </div>
        </div>

        <!-- Back Button -->
        <a href="{{ route('section1s.index') }}" class="btn btn-back mt-3">Back to List</a>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Section1</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .container {
            max-width: 800px;
        }
        .form-label {
            font-weight: bold;
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
        <h1 class="mb-4 text-center text-primary">Edit Section1</h1>

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

        <form action="{{ route('section1s.update', $section1->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" name="name" class="form-control" id="name" value="{{ old('name', $section1->name) }}">
                @error('name')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="job" class="form-label">Job</label>
                <input type="text" name="job" class="form-control" id="job" value="{{ old('job', $section1->job) }}">
                @error('job')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea name="description" class="form-control" id="description">{{ old('description', $section1->description) }}</textarea>
                @error('description')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="facebook_link" class="form-label">Facebook Link</label>
                <input type="url" name="facebook_link" class="form-control" id="facebook_link" value="{{ old('facebook_link', $section1->facebook_link) }}">
                @error('facebook_link')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="instgram_link" class="form-label">Instagram Link</label>
                <input type="url" name="instgram_link" class="form-control" id="instgram_link" value="{{ old('instgram_link', $section1->instgram_link) }}">
                @error('instgram_link')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="linkedin_link" class="form-label">LinkedIn Link</label>
                <input type="url" name="linkedin_link" class="form-control" id="linkedin_link" value="{{ old('linkedin_link', $section1->linkedin_link) }}">
                @error('linkedin_link')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="image1" class="form-label">Image 1</label>
                <input type="text" name="image1" class="form-control" id="image1" value="{{ old('image1', $section1->image1) }}">
                @error('image1')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="image2" class="form-label">Image 2</label>
                <input type="text" name="image2" class="form-control" id="image2" value="{{ old('image2', $section1->image2) }}">
                @error('image2')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="image3" class="form-label">Image 3</label>
                <input type="text" name="image3" class="form-control" id="image3" value="{{ old('image3', $section1->image3) }}">
                @error('image3')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="d-flex justify-content-between">
                <button type="submit" class="btn btn-custom">Update</button>
                <a href="{{ route('section1s.index') }}" class="btn btn-back">Back to List</a>
            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Section4_1</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<a class="btn btn-primary" href="{{route('admin.dashboard')}}" >back to dashboard</a>
    <div class="container mt-4">
        <h1 class="text-center text-primary mb-4">Create Section4_1</h1>

        <form action="{{ route('section4_1s.store') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label for="education" class="form-label">Education</label>
                <input type="text" name="education" class="form-control" id="education" value="{{ old('education') }}">
                @error('education')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="from_where" class="form-label">From Where</label>
                <input type="text" name="from_where" class="form-control" id="from_where" value="{{ old('from_where') }}">
                @error('from_where')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="details" class="form-label">Details</label>
                <textarea name="details" class="form-control" id="details">{{ old('details') }}</textarea>
                @error('details')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="gpa" class="form-label">GPA</label>
                <input type="number" name="gpa" class="form-control" id="gpa" step="0.01" min="0" max="4" value="{{ old('gpa') }}">
                @error('gpa')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Create</button>
            <a href="{{ route('section4_1s.index') }}" class="btn btn-secondary">Back to List</a>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

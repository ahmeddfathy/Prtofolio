<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Section 5 Record</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<a class="btn btn-primary" href="{{route('admin.dashboard')}}" >back to dashboard</a>
    <div class="container mt-5">
        <h1 class="text-center">Edit Record</h1>
        <form action="{{ route('section5.update', $section5->id) }}" method="POST" class="p-4 border rounded">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" name="name" id="name" class="form-control" value="{{ $section5->name }}" required>
            </div>
            <div class="mb-3">
                <label for="role" class="form-label">Role</label>
                <input type="text" name="role" id="role" class="form-control" value="{{ $section5->role }}" required>
            </div>
            <div class="mb-3">
                <label for="content" class="form-label">Content</label>
                <textarea name="content" id="content" class="form-control" rows="4" required>{{ $section5->content }}</textarea>
            </div>
            <div class="mb-3">
                <label for="phone" class="form-label">Phone</label>
                <input type="text" name="phone" id="phone" class="form-control" value="{{ $section5->phone }}" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" name="email" id="email" class="form-control" value="{{ $section5->email }}" required>
            </div>
            <div class="mb-3">
                <label for="facebook_link" class="form-label">Facebook Link</label>
                <input type="url" name="facebook_link" id="facebook_link" class="form-control" value="{{ $section5->facebook_link }}">
            </div>
            <div class="mb-3">
                <label for="linkedin_link" class="form-label">LinkedIn Link</label>
                <input type="url" name="linkedin_link" id="linkedin_link" class="form-control" value="{{ $section5->linkedin_link }}">
            </div>
            <div class="mb-3">
                <label for="instagram_link" class="form-label">Instagram Link</label>
                <input type="url" name="instagram_link" id="instagram_link" class="form-control" value="{{ $section5->instagram_link }}">
            </div>
            <button type="submit" class="btn btn-success">Update</button>
            <a href="{{ route('section5.index') }}" class="btn btn-secondary">Cancel</a>
        </form>
    </div>
</body>
</html>

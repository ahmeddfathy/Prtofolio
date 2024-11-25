<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Skill</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<a class="btn btn-primary" href="{{route('admin.dashboard')}}" >back to dashboard</a>
    <div class="container mt-5">
        <h1 class="text-center mb-4">Add a New Skill</h1>
        <form action="{{ route('skills.store') }}" method="POST" class="p-4 border rounded">
            @csrf
            <div class="mb-3">
                <label for="skill" class="form-label">Skill Name</label>
                <input type="text" name="skill" id="skill" class="form-control" placeholder="Enter skill name" required>
            </div>
            <div class="mb-3">
                <label for="progress" class="form-label">Progress (%)</label>
                <input type="number" name="progress" id="progress" class="form-control" placeholder="Enter progress percentage" min="0" max="100" required>
            </div>
            <button type="submit" class="btn btn-success">Save</button>
            <a href="{{ route('skills.index') }}" class="btn btn-secondary">Cancel</a>
        </form>
    </div>
</body>
</html>

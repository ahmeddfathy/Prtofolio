<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Skill</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center mb-4">Skill Details</h1>
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Skill: {{ $skill->skill }}</h4>
                <h5>Progress:</h5>
                <div class="progress mb-3">
                    <div class="progress-bar" role="progressbar" style="width: {{ $skill->progress }}%;" aria-valuenow="{{ $skill->progress }}" aria-valuemin="0" aria-valuemax="100">
                        {{ $skill->progress }}%
                    </div>
                </div>
                <a href="{{ route('skills.index') }}" class="btn btn-primary">Back</a>
            </div>
            <a class="btn btn-primary" href="{{route('admin.dashboard')}}" >back to dashboard</a>
        </div>
    </div>
</body>
</html>

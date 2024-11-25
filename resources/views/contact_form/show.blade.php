<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Contact Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<a class="btn btn-primary" href="{{route('admin.dashboard')}}" >back to dashboard</a>
    <div class="container mt-5">
        <h1>Contact Form Details</h1>
        <div class="p-4 border rounded">
            <p><strong>Name:</strong> {{ $contactForm->name }}</p>
            <p><strong>Phone:</strong> {{ $contactForm->phone }}</p>
            <p><strong>Email:</strong> {{ $contactForm->email }}</p>
            <p><strong>Subject:</strong> {{ $contactForm->subject }}</p>
            <p><strong>Message:</strong> {{ $contactForm->message }}</p>
        </div>
        <a href="{{ route('contact_form.index') }}" class="btn btn-primary mt-3">Back to List</a>
    </div>
</body>
</html>

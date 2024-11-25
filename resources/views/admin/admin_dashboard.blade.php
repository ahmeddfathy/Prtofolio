<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f8f9fa;
        }
        .sidebar {
            width: 250px;
            background: #343a40;
            height: 100vh;
            position: fixed;
            top: 0;
            left: 0;
            color: #fff;
            padding-top: 20px;
        }
        .sidebar a {
            color: #adb5bd;
            text-decoration: none;
            display: block;
            padding: 15px;
            font-size: 1rem;
        }
        .sidebar a:hover {
            background: #495057;
            color: #fff;
        }
        .main-content {
            margin-left: 250px;
            padding: 20px;
        }
        .navbar {
            background: #343a40;
            color: #fff;
        }
        .navbar .navbar-brand {
            color: #fff;
        }
        .card {
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border: none;
        }
    </style>
</head>
<body>
    <!-- Sidebar -->
    <div class="sidebar">
        <h2 class="text-center mb-4">Admin Dashboard</h2>
        <a href="{{ route('experiences.index') }}"><i class="fas fa-briefcase me-2"></i> Manage Experiences</a>
        <a href="{{ route('contact_form.index') }}"><i class="fas fa-envelope me-2"></i> Manage Contact Forms</a>
        <a href="{{ route('section5.index') }}"><i class="fas fa-layer-group me-2"></i> Manage Section 5</a>
        <a href="{{ route('skills.index') }}"><i class="fas fa-lightbulb me-2"></i> Manage Skills</a>
        <a href="{{ route('section3s.index') }}"><i class="fas fa-chart-line me-2"></i> Manage Section 3</a>
        <a href="{{ route('section4_1s.index') }}"><i class="fas fa-cogs me-2"></i> Manage Section 4.1</a>
        <a href="{{ route('section2s.index') }}"><i class="fas fa-table me-2"></i> Manage Section 2</a>
        <a href="{{ route('section1s.index') }}"><i class="fas fa-columns me-2"></i> Manage Section 1</a>
    </div>

    <!-- Main Content -->
    <div class="main-content">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Admin Panel</a>
                <div class="d-flex">
                    <form method="POST" action="{{ route('admin.logout') }}">
                        @csrf
                        <button type="submit" class="btn btn-outline-light">Logout</button>
                    </form>
                </div>
            </div>
        </nav>

        <!-- Dashboard Content -->
        <div class="container mt-4">
            <div class="row">
                <!-- Card Examples -->
                <div class="col-md-4 mb-3">
                    <div class="card text-center">
                        <div class="card-body">
                            <i class="fas fa-briefcase fa-3x text-primary mb-3"></i>
                            <h5 class="card-title">Manage Experiences</h5>
                            <a href="{{ route('experiences.index') }}" class="btn btn-outline-primary btn-sm">View Details</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="card text-center">
                        <div class="card-body">
                            <i class="fas fa-envelope fa-3x text-success mb-3"></i>
                            <h5 class="card-title">Manage Contact Forms</h5>
                            <a href="{{ route('contact_form.index') }}" class="btn btn-outline-success btn-sm">View Details</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="card text-center">
                        <div class="card-body">
                            <i class="fas fa-layer-group fa-3x text-danger mb-3"></i>
                            <h5 class="card-title">Manage Section 5</h5>
                            <a href="{{ route('section5.index') }}" class="btn btn-outline-danger btn-sm">View Details</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="card text-center">
                        <div class="card-body">
                            <i class="fas fa-lightbulb fa-3x text-warning mb-3"></i>
                            <h5 class="card-title">Manage Skills</h5>
                            <a href="{{ route('skills.index') }}" class="btn btn-outline-warning btn-sm">View Details</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="card text-center">
                        <div class="card-body">
                            <i class="fas fa-chart-line fa-3x text-info mb-3"></i>
                            <h5 class="card-title">Manage Section 3</h5>
                            <a href="{{ route('section3s.index') }}" class="btn btn-outline-info btn-sm">View Details</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="card text-center">
                        <div class="card-body">
                            <i class="fas fa-cogs fa-3x text-secondary mb-3"></i>
                            <h5 class="card-title">Manage Section 4.1</h5>
                            <a href="{{ route('section4_1s.index') }}" class="btn btn-outline-secondary btn-sm">View Details</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="card text-center">
                        <div class="card-body">
                            <i class="fas fa-table fa-3x text-danger mb-3"></i>
                            <h5 class="card-title">Manage Section 2</h5>
                            <a href="{{ route('section2s.index') }}" class="btn btn-outline-danger btn-sm">View Details</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="card text-center">
                        <div class="card-body">
                            <i class="fas fa-columns fa-3x text-primary mb-3"></i>
                            <h5 class="card-title">Manage Section 1</h5>
                            <a href="{{ route('section1s.index') }}" class="btn btn-outline-primary btn-sm">View Details</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap and FontAwesome JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js"></script>
</body>
</html>

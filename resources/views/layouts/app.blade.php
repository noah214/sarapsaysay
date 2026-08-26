<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'SarapSaysay')</title>

    <!-- Bootstrap 5 (CDN) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body { background-color: #f0f5f2; }
        .navbar-brand { font-weight: 600; letter-spacing: 1px; }
        .btn-brand { background-color: #16452d; color: #fff; }
        .btn-brand:hover { background-color: #0f3320; color: #fff; }
        .badge-brand { background-color: #d9ead6; color: #16452d; }
    </style>
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color:#16452d;">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">SarapSaysay</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navMenu">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navMenu">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="{{ url('/') }}">For You</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Discover</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Review</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Passport</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('/login') }}">Log in</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <main class="py-4">
        @yield('content')
    </main>

    <footer class="text-center text-muted py-4 small">
        &copy; {{ date('Y') }} SarapSaysay
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EduFun - @yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            line-height: 1.6;
        }
        
        .navbar {
            background-color: #ffffff;
            padding: 1rem 2rem;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
            position: sticky;
            top: 0;
            z-index: 100;
        }
        
        .navbar-brand {
            font-size: 1.5rem;
            font-weight: bold;
            color: #2c3e50 !important;
        }
        
        .navbar-nav .nav-link {
            color: #2c3e50;
            font-weight: 500;
            padding: 0.5rem 1rem;
        }
        
        .navbar-nav .nav-link:hover {
            color: #3498db;
        }
        
        .dropdown-menu {
            border-radius: 4px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            border: none;
        }
        
        .dropdown-item:hover {
            background-color: #f8f9fa;
        }
        
        .hero-section {
            width: 100%;
            height: 400px;
            background-size: cover;
            background-position: center;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.5);
        }
        
        .article-card {
            background: white;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
            transition: transform 0.3s, box-shadow 0.3s;
            height: 100%;
        }
        
        .article-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 4px 16px rgba(0,0,0,0.15);
        }
        
        .article-image {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }
        
        .read-more {
            display: inline-block;
            padding: 0.5rem 1.5rem;
            background-color: #3498db;
            color: white;
            text-decoration: none;
            border-radius: 4px;
            transition: background-color 0.3s;
        }
        
        .read-more:hover {
            background-color: #2980b9;
            color: white;
        }
        
        .read-more-dark {
            background-color: #1e3a5f;
            border-radius: 20px;
            padding: 0.5rem 1.5rem;
        }
        
        .read-more-dark:hover {
            background-color: #2c3e50;
        }
        
        .footer {
            background-color: #2c3e50;
            color: white;
            text-align: center;
            padding: 2rem;
            margin-top: 3rem;
        }
        
        .writer-circle {
            width: 200px;
            height: 200px;
            border-radius: 50%;
            overflow: hidden;
            margin: 0 auto 1.5rem;
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
            background-color: white;
        }
        
        .writer-circle img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        
        .writer-card {
            text-align: center;
            cursor: pointer;
            transition: transform 0.3s;
            text-decoration: none;
            color: inherit;
            display: block;
        }
        
        .writer-card:hover {
            transform: scale(1.05);
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-white">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ route('home') }}">EduFun</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                            Category
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Data Science</a></li>
                            <li><a class="dropdown-item" href="#">Network Security</a></li>
                            <li><a class="dropdown-item" href="#">Interactive Multimedia</a></li>
                            <li><a class="dropdown-item" href="#">Software Engineering</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('writers.index') }}">Writers</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('about') }}">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('popular') }}">Popular</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    @yield('content')

    <footer class="footer">
        <p class="mb-0">&copy; EduFun 2025 | Web Programming | Marvel Collin | 2702280352</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

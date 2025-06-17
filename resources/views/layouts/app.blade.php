<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - Apotik Gampil</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    
    <style>
        /* Custom Navbar Styles */
        .navbar {
            background: linear-gradient(135deg, #f0f0f1 0%, #fefdff 100%);
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
            padding: 1rem 0;
            transition: all 0.3s ease;
        }
        
        .navbar.scrolled {
            padding: 0.5rem 0;
            box-shadow: 0 2px 20px rgba(0,0,0,0.15);
        }
        
        .navbar-brand {
            font-weight: 700;
            font-size: 1.5rem;
            color: #c00f0f !important;
            text-decoration: none;
            display: flex;
            align-items: center;
            transition: transform 0.3s ease;
        }
        
        .navbar-brand:hover {
            transform: scale(1.05);
        }
        
        .navbar-brand img {
            height: 40px;
            margin-right: 10px;
            border-radius: 8px;
        }
        
        .navbar-nav .nav-link {
            color: rgba(0, 0, 0, 0.9) !important;
            font-weight: 500;
            padding: 0.8rem 1.2rem !important;
            margin: 0 0.2rem;
            border-radius: 25px;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
            
        }
        
        .navbar-nav .nav-link::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255,255,255,0.2), transparent);
            transition: left 0.5s;
        }
        
        .navbar-nav .nav-link:hover::before {
            left: 100%;
        }
        
        .navbar-nav .nav-link:hover {
            color: #000000 !important;
            background: rgba(255,255,255,0.15);
            transform: translateY(-2px);
            box-shadow: 0 4px 10px rgba(0,0,0,0.2);
        }
        
        .navbar-nav .nav-link.active {
            color: #fff !important;
            background: rgba(255,255,255,0.2);
            box-shadow: 0 2px 8px rgba(0,0,0,0.15);
        }
        
        .navbar-toggler {
            border: 2px solid rgba(255,255,255,0.3);
            border-radius: 8px;
            padding: 0.5rem;
            transition: all 0.3s ease;
        }
        
        .navbar-toggler:hover {
            border-color: rgba(255,255,255,0.6);
            background: rgba(255,255,255,0.1);
        }
        
        .navbar-toggler-icon {
            background-image: url("data:image/svg+xml;charset=utf8,%3Csvg viewBox='0 0 32 32' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath stroke='rgba(255,255,255,0.9)' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 8h24M4 16h24M4 24h24'/%3E%3C/svg%3E");
        }
        
        /* Mobile responsive */
        @media (max-width: 991.98px) {
            .navbar-collapse {
                margin-top: 1rem;
                background: rgba(255,255,255,0.1);
                border-radius: 15px;
                padding: 1rem;
                backdrop-filter: blur(10px);
            }
            
            .navbar-nav .nav-link {
                margin: 0.2rem 0;
                text-align: center;
            }
        }
        
        /* Add some animation to the brand logo */
        @keyframes float {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-3px); }
        }
        
        .navbar-brand img {
            animation: float 3s ease-in-out infinite;
        }
        
        /* Hover effect for navigation items */
        .nav-item {
            position: relative;
        }
        
        .nav-item::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            width: 0;
            height: 2px;
            background: #fff;
            transition: all 0.3s ease;
            transform: translateX(-50%);
        }
        
        .nav-item:hover::after {
            width: 80%;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container">
            <a class="navbar-brand" href="{{ route('home') }}">
                <span>Apotik Gampil</span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('home') }}">
                            <i class="fas fa-home me-1"></i>Profil
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('services') }}">
                            <i class="fas fa-stethoscope me-1"></i>Layanan
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('products') }}">
                            <i class="fas fa-pills me-1"></i>Produk
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('articles') }}">
                            <i class="fas fa-newspaper me-1"></i>Artikel
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('consultation.index') }}">
                            <i class="fas fa-user-md me-1"></i>Konsultasi
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('contact') }}">
                            <i class="fas fa-phone me-1"></i>Kontak
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <main class="py-4 mt-5">
        @yield('content')
    </main>

     <footer class="bg-dark text-light py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h5>Apotik Gampil</h5>
                    <p>Melayani dengan sepenuh hati untuk kesehatan Anda</p>
                </div>
                <div class="col-md-4">
                    <h5>Quick Links</h5>
                    <ul class="list-unstyled">
                        <li><a href="{{ route('home') }}" class="text-light">Profil</a></li>
                        <li><a href="{{ route('services') }}" class="text-light">Layanan</a></li>
                        <li><a href="{{ route('products') }}" class="text-light">Produk</a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h5>Kontak</h5>
                    <ul class="list-unstyled">
                        <li><i class="fas fa-phone"></i> +62 xxx-xxxx-xxxx</li>
                        <li><i class="fas fa-envelope"></i> info@apotikgampil.com</li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    
    <script>
        // Add scroll effect to navbar
        window.addEventListener('scroll', function() {
            const navbar = document.querySelector('.navbar');
            if (window.scrollY > 50) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }
        });
    </script>
    
    @stack('scripts')
</body>
</html>
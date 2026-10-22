<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'The Midnight Owl')</title>

    <link rel="stylesheet" href="{{ asset('bootstrap-5.3.8-dist/css/bootstrap.min.css') }}">

    <style>
        body {
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            background-image:
                linear-gradient(rgba(16, 24, 39, 0.55),
                    rgba(16, 24, 39, 0.55)),
                url('/assets/images/The%20Midnight%20Owl.png');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            background-repeat: no-repeat;
            color: #212529;
        }

        .navbar {
            background: linear-gradient(90deg, #101827, #24344f);
        }

        .navbar-brand {
            letter-spacing: 0.5px;
            white-space: nowrap;
        }

        .navbar-nav .nav-link {
            color: #f1f5f9;
            padding-left: 0.65rem;
            padding-right: 0.65rem;
            transition: color 0.2s ease;
        }

        .navbar-nav .nav-link:hover,
        .navbar-nav .nav-link:focus {
            color: #60a5fa;
        }

        main {
            flex: 1;
            min-height: 75vh;
        }

        .card {
            height: 100%;
            border: 1px solid #e0e5ed;
            border-radius: 14px;
            overflow: hidden;
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }

        .card:hover {
            transform: translateY(-4px);
            box-shadow: 0 8px 22px rgba(16, 24, 39, 0.12);
        }

        footer {
            background: #101827;
        }

        @media (max-width: 991.98px) {
            .navbar-nav .nav-link {
                padding: 0.5rem 0;
            }

            body {
                background-attachment: scroll;
            }
        }
    </style>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">

            <a class="navbar-brand fw-bold"
                href="{{ route('ecommerce.index') }}">
                The Midnight Owl
            </a>

            <button class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarMenu"
                aria-controls="navbarMenu"
                aria-expanded="false"
                aria-label="Buka navigasi">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarMenu">
                <ul class="navbar-nav ms-auto align-items-lg-center">

                    <li class="nav-item">
                        <a class="nav-link"
                            href="{{ route('ecommerce.index') }}">
                            Beranda
                        </a>
                    </li>

                    @foreach ([
                    'T-Shirt',
                    'Kemeja',
                    'Polo',
                    'Sweater & Hoodie',
                    'Jaket',
                    'Celana'
                    ] as $item)
                    <li class="nav-item">
                        <a class="nav-link"
                            href="{{ route('ecommerce.catalog', ['category' => $item]) }}">
                            {{ $item }}
                        </a>
                    </li>
                    @endforeach

                </ul>
            </div>
        </div>
    </nav>

    <main class="container py-4">
        @yield('content')
    </main>

    <footer class="text-white text-center py-3 mt-4">
        <p class="mb-0">
            &copy; 2026 The Midnight Owl
            | Eka Burhanudin - 251011700991
        </p>
    </footer>

    <script src="{{ asset('bootstrap-5.3.8-dist/js/bootstrap.bundle.min.js') }}"></script>

</body>

</html>
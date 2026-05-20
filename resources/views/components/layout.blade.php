<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <nav class="navbar navbar-expand-lg bg-body-tertiary shadow-sm">
            <div class="container-fluid">
                <!-- Brand / Logo -->
                <a class="navbar-brand fw-bold text-primary" href="#">Akademik</a>

                <!-- Tombol Toggler untuk versi Mobile (HP) -->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <!-- Menu Navigasi -->
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <!-- Link 1: List Fakultas -->
                        <li class="nav-item">
                            <a class="nav-link {{ request()->is('fakultas') ? 'active fw-bold text-primary' : '' }}"
                                href="{{ url('/fakultas') }}">
                                List Fakultas
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ request()->is('fakultas') ? 'active fw-bold text-primary' : '' }}"
                                href="{{ route("prodi.index") }}">
                                List Prodi
                            </a>
                        </li>


                        <!-- Link 2: Tambah Fakultas -->
                        <li class="nav-item">
                            <a class="nav-link {{ request()->is('fakultas/create') ? 'active fw-bold text-primary' : '' }}"
                                href="{{ url('/fakultas/create') }}">
                                Tambah Fakultas
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ request()->is('fakultas/create') ? 'active fw-bold text-primary' : '' }}"
                                href="{{  route("prodi.create")  }}">
                                Tambah Prodi
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    {{ $slot }}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous">
    </script>
</body>

</html>

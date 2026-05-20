<x-layout>
    <div class="container my-5">
        <!-- Section Selamat Datang -->
        <div class="text-center mb-5 py-4 bg-light rounded-4 shadow-sm">
            <h1 class="display-5 fw-bold text-dark mb-2">Selamat Datang</h1>
            <p class="text-secondary fs-5 mb-0">Di Sistem Informasi David Richardo Lim</p>
        </div>

        <!-- Section Menu Utama -->
        <div class="row g-4 justify-content-center">

            <!-- Card 1: List Fakultas -->
            <div class="col-md-5 col-lg-4">
                <div class="card h-100 shadow-sm border-0 card-hover text-center p-3">
                    <div class="card-body d-flex flex-column align-items-center justify-content-center">
                        <div class="bg-primary bg-opacity-10 text-primary rounded-circle p-3 mb-3">
                            <i class="bi bi-table fs-2"></i>
                        </div>
                        <h4 class="card-title fw-bold text-dark">List Fakultas</h4>
                        <p class="card-text text-secondary small mb-4">Lihat, ubah, detail, dan kelola semua data
                            fakultas yang terdaftar.</p>
                        <a href="/fakultas" class="btn btn-primary w-100 stretched-link fw-semibold">
                            Buka Tabel
                        </a>
                    </div>
                </div>
            </div>

            <!-- Card 2: Tambah Fakultas -->
            <div class="col-md-5 col-lg-4">
                <div class="card h-100 shadow-sm border-0 card-hover text-center p-3">
                    <div class="card-body d-flex flex-column align-items-center justify-content-center">
                        <div class="bg-success bg-opacity-10 text-success rounded-circle p-3 mb-3">
                            <i class="bi bi-plus-circle fs-2"></i>
                        </div>
                        <h4 class="card-title fw-bold text-dark">Tambah Fakultas</h4>
                        <p class="card-text text-secondary small mb-4">Input data fakultas dan nama dekan baru ke dalam
                            sistem.</p>
                        <a href="/fakultas/create" class="btn btn-success w-100 stretched-link fw-semibold">
                            Tambah Data
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- Tambahan CSS CSS opsional untuk efek interaktif saat kursor menyentuh menu -->
    <style>
        .card-hover {
            transition: transform 0.2s ease-in-out, box-shadow 0.2s ease-in-out;
        }

        .card-hover:hover {
            transform: translateY(-5px);
            box-shadow: 0 .5rem 1.5rem rgba(0, 0, 0, .1) !important;
        }
    </style>
</x-layout>

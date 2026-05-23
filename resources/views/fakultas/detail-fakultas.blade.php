<x-layout>
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <!-- Card Wrapper -->
                <div class="card shadow-sm border-0">
                    <!-- Header Card dengan Background Ringan -->
                    <div class="card-header bg-light border-bottom py-3 d-flex justify-content-between align-items-center">
                        <h5 class="card-title mb-0 fw-bold text-dark">
                            <i class="bi bi-info-circle text-primary me-2"></i>Detail Fakultas
                        </h5>
                        <a href="/fakultas" class="btn btn-sm btn-outline-secondary">
                            <i class="bi bi-arrow-left"></i> Kembali
                        </a>
                    </div>
                    
                    <!-- Body Informasi -->
                    <div class="card-body p-4">
                        <!-- Baris 1: Nama Fakultas -->
                        <div class="row mb-3 pb-3 border-bottom">
                            <div class="col-sm-4 text-secondary fw-semibold">
                                Nama Fakultas
                            </div>
                            <div class="col-sm-8 text-dark fw-bold">
                                {{ $fakultas->nama_fakultas }}
                            </div>
                        </div>

                        <!-- Baris 2: Nama Dekan -->
                        <div class="row mb-2">
                            <div class="col-sm-4 text-secondary fw-semibold">
                                Nama Dekan
                            </div>
                            <div class="col-sm-8 text-dark">
                                {{ $fakultas->nama_dekan }}
                            </div>
                        </div>
                    </div>

                    <!-- Footer Card untuk Akses Cepat ke Tombol Aksi -->
                    <div class="card-footer bg-white border-top py-3 d-flex justify-content-end gap-2">
                        <a href="/fakultas/{{ $fakultas->id }}/edit" class="btn btn-warning text-white px-3 shadow-sm">
                            <i class="bi bi-pencil"></i> Edit Data
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>
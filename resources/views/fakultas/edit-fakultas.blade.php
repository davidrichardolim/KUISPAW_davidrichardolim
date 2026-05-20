<x-layout>
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <!-- Card Wrapper -->
                <div class="card shadow-sm border-0">
                    <!-- Header Card -->
                    <div class="card-header bg-white border-bottom py-3">
                        <h5 class="card-title mb-0 fw-bold text-dark">Edit Data Fakultas</h5>
                    </div>

                    <!-- Body Form -->
                    <div class="card-body p-4">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>

                        @endif
                        <form action="/fakultas/{{ $fakultas->id }}" method="POST">
                            @csrf
                            @method('PUT')

                            <!-- Input Nama Fakultas -->
                            <div class="mb-3">
                                <label for="nama_fakultas" class="form-label fw-semibold text-secondary">Nama
                                    Fakultas</label>
                                <input name="nama_fakultas" id="nama_fakultas" type="text"
                                    placeholder="Nama Fakultas" class="form-control"
                                    value="{{ $fakultas->nama_fakultas }}">
                            </div>

                            <!-- Input Nama Dekan -->
                            <div class="mb-4">
                                <label for="nama_dekan" class="form-label fw-semibold text-secondary">Nama Dekan</label>
                                <input name="nama_dekan" id="nama_dekan" type="text" placeholder="Nama Dekan"
                                    class="form-control" value="{{ $fakultas->nama_dekan }}">
                            </div>

                            <!-- Tombol Aksi -->
                            <div class="d-flex justify-content-end gap-2">
                                <a href="/fakultas" class="btn btn-light border">
                                    Batal
                                </a>
                                <button type="submit" class="btn btn-warning text-white px-4 shadow-sm">
                                    Perbarui Data
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>

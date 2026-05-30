<x-layout>
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <!-- Card Wrapper -->
                <div class="card shadow-sm border-0">
                    <!-- Header Card -->
                    <div class="card-header bg-white border-bottom py-3">
                        <h5 class="card-title mb-0 fw-bold text-dark">Tambah Prodi Baru</h5>
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

                        <form action="{{ route('prodi.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="mb-3">
                                <label for="fakultas" class="form-label">
                                    Fakultas
                                </label>
                                <select class="form-select" name="fakultas_id" id="fakultas">
                                    <option value="">Pilih Fakultas</option>
                                    @foreach ($listFakultas as $fakultas)
                                        <option value="{{ $fakultas->id }}">
                                            {{$fakultas->nama_fakultas}}
                                        </option>
                                    @endforeach
                                </select>
                            </div>

                            <!-- Input Nama Prodi -->
                            <div class="mb-3">
                                <label for="nama_prodi" class="form-label fw-semibold text-secondary">Nama Prodi</label>
                                <input name="nama_prodi" id="nama_prodi" type="text"
                                    placeholder="Masukkan nama prodi (cth: Sistem Informasi)" class="form-control" value="{{ old('nama_prodi') }}">
                            </div>

                            <!-- Input Alias Prodi (Dropdown) -->
                            <div class="mb-3">
                                <label for="alias_prodi" class="form-label fw-semibold text-secondary">Alias Prodi</label>
                                <select name="alias_prodi" id="alias_prodi" class="form-select">
                                    <option value="" selected disabled>-- Pilih Alias Prodi --</option>
                                    <option value="SI" {{ old('alias_prodi') == 'SI' ? 'selected' : '' }}>SI (Sistem Informasi)</option>
                                    <option value="IF" {{ old('alias_prodi') == 'IF' ? 'selected' : '' }}>IF (Informatika)</option>
                                    <option value="TE" {{ old('alias_prodi') == 'TE' ? 'selected' : '' }}>TE (Teknik Elektro)</option>
                                    <option value="MJ" {{ old('alias_prodi') == 'MJ' ? 'selected' : '' }}>MJ (Manajemen)</option>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="photo_kaprodi" class="form-label">
                                    Photo Kaprodi
                                </label>
                                <input 
                                    type="file"
                                    id="photo_kaprodi"
                                    name="photo_kaprodi"
                                    class="form-control"
                                    accept="image/*"
                                    placeholder="Pilih Photo Kaprodi">
                            </div>

                            <!-- Input Nama Kaprodi -->
                            <div class="mb-4">
                                <label for="nama_kaprodi" class="form-label fw-semibold text-secondary">Nama Kaprodi</label>
                                <input name="nama_kaprodi" id="nama_kaprodi" type="text"
                                    placeholder="Masukkan nama kaprodi beserta gelar" class="form-control" value="{{ old('nama_kaprodi') }}">
                            </div>

                            <!-- Tombol Aksi -->
                            <div class="d-flex justify-content-end gap-2">
                                <a href="/prodi" class="btn btn-light border">
                                    Batal
                                </a>
                                <button type="submit" class="btn btn-primary px-4 shadow-sm">
                                    Simpan Data
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>
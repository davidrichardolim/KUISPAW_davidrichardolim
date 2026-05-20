<x-layout>
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <!-- Card Wrapper -->
                <div class="card shadow-sm border-0">
                    <!-- Header Card -->
                    <div class="card-header bg-white border-bottom py-3">
                        <h5 class="card-title mb-0 fw-bold text-dark">Edit Data Prodi</h5>
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

                        <form action="/prodi/{{ $prodi->id }}" method="POST">
                            @csrf
                            @method('PUT')

                            <!-- Input Nama Prodi -->
                            <div class="mb-3">
                                <label for="nama_prodi" class="form-label fw-semibold text-secondary">Nama Prodi</label>
                                <input name="nama_prodi" id="nama_prodi" type="text"
                                    placeholder="Nama Prodi" class="form-control"
                                    value="{{ old('nama_prodi', $prodi->nama_prodi) }}">
                            </div>

                            <!-- Input Alias Prodi (Dropdown Terpilih) -->
                            <div class="mb-3">
                                <label for="alias_prodi" class="form-label fw-semibold text-secondary">Alias Prodi</label>
                                <select name="alias_prodi" id="alias_prodi" class="form-select">
                                    <option value="" disabled>-- Pilih Alias Prodi --</option>
                                    <option value="SI" {{ old('alias_prodi', $prodi->alias_prodi) == 'SI' ? 'selected' : '' }}>SI (Sistem Informasi)</option>
                                    <option value="IF" {{ old('alias_prodi', $prodi->alias_prodi) == 'IF' ? 'selected' : '' }}>IF (Informatika)</option>
                                    <option value="TE" {{ old('alias_prodi', $prodi->alias_prodi) == 'TE' ? 'selected' : '' }}>TE (Teknik Elektro)</option>
                                    <option value="MJ" {{ old('alias_prodi', $prodi->alias_prodi) == 'MJ' ? 'selected' : '' }}>MJ (Manajemen)</option>
                                </select>
                            </div>

                            <!-- Input Nama Kaprodi -->
                            <div class="mb-4">
                                <label for="nama_kaprodi" class="form-label fw-semibold text-secondary">Nama Kaprodi</label>
                                <input name="nama_kaprodi" id="nama_kaprodi" type="text" placeholder="Nama Kaprodi"
                                    class="form-control" value="{{ old('nama_kaprodi', $prodi->nama_kaprodi) }}">
                            </div>

                            <!-- Tombol Aksi -->
                            <div class="d-flex justify-content-end gap-2">
                                <a href="/prodi" class="btn btn-light border">
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
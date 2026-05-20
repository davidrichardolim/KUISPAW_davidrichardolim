<x-layout>
    <div class="container my-4">
        <!-- Judul & Header Section -->
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h1 class="h2 text-dark fw-bold">List Program Studi</h1>
            <!-- Tombol Tambah Prodi Baru -->
            <a href="/prodi/create" class="btn btn-primary shadow-sm">
                <i class="bi bi-plus-circle me-1"></i> Tambah Prodi
            </a>
        </div>

        <!-- Card Wrapper untuk tampilan yang lebih clean -->
        <div class="card shadow-sm border-0">
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-striped table-hover align-middle mb-0">
                        <thead class="table-dark">
                            <tr>
                                <th scope="col" class="ps-4" style="width: 8%">No</th>
                                <th scope="col" style="width: 15%">Alias</th>
                                <th scope="col">Nama Prodi</th>
                                <th scope="col">Kaprodi</th>
                                <th scope="col" class="text-center" style="width: 30%">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($prodi as $item)
                                <tr>
                                    <td class="ps-4 fw-semibold text-secondary">{{ $loop->iteration }}</td>
                                    <td>
                                        <span class="badge bg-secondary px-2 py-1.5 fs-7">
                                            {{ $item->alias_prodi }}
                                        </span>
                                    </td>
                                    <td class="fw-bold text-dark">{{ $item->nama_prodi }}</td>
                                    <td>{{ $item->nama_kaprodi }}</td>
                                    <td>
                                        <!-- Flexbox container untuk merapikan tombol aksi -->
                                        <div class="d-flex justify-content-center gap-2">
                                            <a href="/prodi/{{ $item->id }}"
                                                class="btn btn-sm btn-info text-white shadow-sm">
                                                <i class="bi bi-eye"></i> Detail
                                            </a>

                                            <a href="/prodi/{{ $item->id }}/edit"
                                                class="btn btn-sm btn-warning text-white shadow-sm">
                                                <i class="bi bi-pencil"></i> Edit
                                            </a>

                                            <form action="/prodi/{{ $item->id }}" method="post" class="d-inline"
                                                onsubmit="return confirm('Apakah Anda yakin ingin menghapus data prodi ini?')">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger shadow-sm">
                                                    <i class="bi bi-trash"></i> Hapus
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-layout>
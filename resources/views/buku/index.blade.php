<!DOCTYPE html>
<html>
<head>
    <title>Daftar Buku</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <style>
        body { font-family: Arial, sans-serif; }
        table { border-collapse: collapse; width: 100%; margin-top: 20px; }
        th, td { border: 1px solid #ccc; padding: 8px; text-align: left; }
        th { background-color: #f4f4f4; }
        .form-container { margin-top: 20px; }
        .btn { padding: 6px 10px; text-decoration: none; border: none; cursor: pointer; }
        .btn-edit { background: #4CAF50; color: white; }
        .btn-delete { background: #f44336; color: white; }
    </style>
</head>
<body>

    <h1>Daftar Buku</h1>

    {{-- Pesan sukses --}}
    @if(session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif

    {{-- Tabel Buku --}}
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama Buku</th>
                <th>Nama Penulis</th>
                <th>Deskripsi</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse($buku as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->namaBuku }}</td>
                    <td>{{ $item->namaPenulis }}</td>
                    <td>{{ $item->deskripsi }}</td>
                    <td>
                        <a href="{{ route('buku.edit', $item->id) }}" class="btn btn-edit">Edit</a>
                        <form action="{{ route('buku.destroy', $item->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-delete" onclick="return confirm('Yakin mau hapus?')">Hapus</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="5">Tidak ada data buku.</td>
                </tr>
            @endforelse
        </tbody>
    </table>

    {{-- Form Tambah Buku --}}
    <div class="form-container">
        <h2>Tambah Buku</h2>
        <form action="{{ route('buku.store') }}" method="POST">
            @csrf
            <p>
                <label>Nama Buku</label><br>
                <input type="text" name="namaBuku" required>
            </p>
            <p>
                <label>Nama Penulis</label><br>
                <input type="text" name="namaPenulis" required>
            </p>
            <p>
                <label>Deskripsi</label><br>
                <input type="text" name="deskripsi" required>
            </p>
            <button type="submit" class="btn btn-edit">Simpan</button>
        </form>
    </div>

</body>
</html>

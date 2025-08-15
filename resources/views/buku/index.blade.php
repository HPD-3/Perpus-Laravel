<!DOCTYPE html>
<html>
<head>
    <title>Daftar Buku</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <style>
            body {
                font-family: 'Segoe UI', Arial, sans-serif;
                background: #f8fafc;
                margin: 0;
                padding: 0;
            }
            h1 {
                text-align: center;
                color: #333;
                margin-top: 30px;
            }
            table {
                border-collapse: collapse;
                width: 100%;
                margin: 30px auto 0 auto;
                background: #fff;
                box-shadow: 0 2px 8px rgba(0,0,0,0.05);
                border-radius: 8px;
                overflow: hidden;
            }
            th, td {
                border: none;
                padding: 12px 16px;
                text-align: left;
            }
            th {
                background: linear-gradient(90deg, #4CAF50 0%, #81C784 100%);
                color: #fff;
                font-weight: 600;
            }
            tr:nth-child(even) {
                background: #f4f4f4;
            }
            tr:hover {
                background: #e0f7fa;
                transition: background 0.2s;
            }
            .form-container {
                margin: 40px auto 0 auto;
                max-width: 500px;
                background: #fff;
                padding: 24px 32px;
                border-radius: 8px;
                box-shadow: 0 2px 8px rgba(0,0,0,0.07);
            }
            .form-container h2 {
                margin-top: 0;
                color: #4CAF50;
            }
            label {
                font-weight: 500;
                color: #333;
            }
            input[type="text"] {
                width: 100%;
                padding: 8px 10px;
                margin-top: 6px;
                margin-bottom: 16px;
                border: 1px solid #ccc;
                border-radius: 4px;
                box-sizing: border-box;
                font-size: 15px;
            }
            .btn {
                padding: 8px 16px;
                text-decoration: none;
                border: none;
                border-radius: 4px;
                cursor: pointer;
                font-size: 15px;
                margin-right: 4px;
                transition: background 0.2s, color 0.2s;
            }
            .btn-edit {
                background: linear-gradient(90deg, #43e97b 0%, #38f9d7 100%);
                color: #fff;
                font-weight: 600;
            }
            .btn-edit:hover {
                background: #388e3c;
            }
            .btn-delete {
                background: linear-gradient(90deg, #f44336 0%, #ff7961 100%);
                color: #fff;
                font-weight: 600;
            }
            .btn-delete:hover {
                background: #c62828;
            }
            @media (max-width: 700px) {
                table, .form-container {
                    width: 98%;
                    padding: 12px;
                }
                th, td {
                    padding: 8px 6px;
                }
            }
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

<!DOCTYPE html>
<html>
<head>
    <title>Edit Buku</title>
</head>
<body>

    <h1>Edit Buku</h1>

    <form action="{{ route('buku.update', $buku->id) }}" method="POST">
        @csrf
        @method('PUT')
        <p>
            <label>Nama Buku</label><br>
            <input type="text" name="namaBuku" value="{{ $buku->namaBuku }}" required>
        </p>
        <p>
            <label>Nama Penulis</label><br>
            <input type="text" name="namaPenulis" value="{{ $buku->namaPenulis }}" required>
        </p>
        <p>
            <label>Deskripsi</label><br>
            <input type="text" name="deskripsi" value="{{ $buku->deskripsi }}" required>
        </p>
        <button type="submit">Update</button>
    </form>

    <br>
    <a href="{{ route('buku.index') }}">← Kembali</a>

</body>
</html>

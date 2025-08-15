<!DOCTYPE html>
<html>
<head>
    <title>Edit Buku</title>
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
        form {
            max-width: 500px;
            margin: 40px auto 0 auto;
            background: #fff;
            padding: 24px 32px;
            border-radius: 8px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.07);
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
        button[type="submit"] {
            padding: 8px 16px;
            border: none;
            border-radius: 4px;
            background: linear-gradient(90deg, #43e97b 0%, #38f9d7 100%);
            color: #fff;
            font-weight: 600;
            font-size: 15px;
            cursor: pointer;
            transition: background 0.2s;
        }
        button[type="submit"]:hover {
            background: #388e3c;
        }
        a {
            display: block;
            text-align: center;
            margin: 20px auto 0 auto;
            color: #4CAF50;
            text-decoration: none;
            font-weight: 500;
            font-size: 15px;
            transition: color 0.2s;
        }
        a:hover {
            color: #388e3c;
        }
        @media (max-width: 700px) {
            form {
                width: 98%;
                padding: 12px;
            }
        }
    </style>
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

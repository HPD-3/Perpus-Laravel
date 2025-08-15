<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    // Nama tabel
    protected $table = 'buku';

    // Primary key
    protected $primaryKey = 'id';

    // Kolom yang bisa diisi (fillable)
    protected $fillable = [
        'namaBuku',
        'namaPenulis',
        'deskripsi',
    ];
}

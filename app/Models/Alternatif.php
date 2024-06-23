<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alternatif extends Model
{
    use HasFactory;

    protected $table = 'alternatif'; // Tentukan nama tabel jika tidak dalam bentuk jamak dari nama model

    protected $fillable = [
        'nama_alternatif',
        'kode_alternatif',
    ];
}

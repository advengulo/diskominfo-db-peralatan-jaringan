<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peralatan extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_peralatan',
        'tahun_pembelian', 
        'deskripsi_peralatan',
        'kategori_id',
        'username',
        'password',
        'status'
    ];

    public function kategori()
    {
        return $this->hasOne(Kategori::class, 'id', 'kategori_id');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penanganan extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'id_gangguan',
        'waktu_penanganan',
        'nama',
        'tindakan',
        'hasil',
        'rekomendasi'
    ];
}

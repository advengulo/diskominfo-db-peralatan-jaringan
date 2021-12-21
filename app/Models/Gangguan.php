<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gangguan extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable=[
        'id_peralatan',
        'ciri_ciri_gangguan',
        'dampak_gangguan',
        'tanggal_pengajuan'
    ];

    public function peralatan()
    {
        return $this->hasOne(Peralatan::class, 'id', 'id_peralatan');
    }
}

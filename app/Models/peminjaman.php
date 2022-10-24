<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class peminjaman extends Model
{
    use HasFactory;

    protected $table = 'peminjaman';
    protected $guarded = ['id'];

    public function pengembalian()
    {
        return $this->hasMany(pengembalian::class);
    }

    public function petugas()
    {
        return $this->belongsTo(petugas::class);
    }

    public function siswa()
    {
        return $this->belongsTo(siswa::class);
    }

    public function detail_peminjaman()
    {
        return $this->hasMany(detail_peminjaman::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class petugas extends Model
{
    use HasFactory;

    protected $table = 'petugas';
    protected $guarded = ['id'];

    public function peminjaman()
    {
        return $this->belongsTo(peminjaman::class);
    }
}

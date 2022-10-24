<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class detail_pengembalian extends Model
{
    use HasFactory;

    protected $table = 'detail_pengembalian';
    protected $guarded = ['id'];

    public function pengembalian()
    {
        return $this ->belongsTo(pengembalian::class);
        
    }
}

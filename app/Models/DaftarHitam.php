<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DaftarHitam extends Model
{
    use HasFactory;
    protected $table = 'daftarHitam';

    protected $fillable = [
        'user_id',
        'tanggalBlacklist',
        'keterangan',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

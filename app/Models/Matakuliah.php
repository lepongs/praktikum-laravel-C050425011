<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Matakuliah extends Model
{
    use HasFactory;

    protected $fillable = ['kode_mk', 'id_dosen', 'nama_mk', 'sks', 'semester'];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'id_dosen');
    }
}


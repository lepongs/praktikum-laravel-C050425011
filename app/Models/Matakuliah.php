<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Matakuliah extends Model
{
    use HasFactory;

    protected $fillable = ['kode_mk', 'id_dosen', 'nama_mk', 'sks', 'semester'];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'id_dosen');
    }

    public function nilai_mk(): HasMany
    {
        return $this->hasMany(NilaiMatakuliah::class, 'matakuliah_id');
    }
}


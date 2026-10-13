<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Mahasiswa extends Model
{
    use HasFactory;

    protected $fillable = ['nim', 'nama', 'email', 'prodi', 'semester'];

    public function nilai_mk(): HasMany
    {
        return $this->hasMany(NilaiMatakuliah::class, 'mahasiswa_id');
    }
}

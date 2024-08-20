<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Kategori extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_kategori',
    ];

    public function pengaduan(): HasMany
    {
        return $this->hasMany(Pengaduan::class);
    }
}
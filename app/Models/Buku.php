<?php

namespace App\Models;

Use App\Models\Pinjams;
Use App\Models\Ulasans;
Use App\Models\KategoriBuku;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    use HasFactory;

    public function kategori_bukus()
    {
        return $this->belongsTo(related: kategoriBuku::class);
    }

    public function pinjams()
    {
        return $this->hasMany(related: Pinjam::class);
    }

    public function ulasans()
    {
        return $this->hasMany(related: Ulasan::class);
    }
}

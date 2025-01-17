<?php

namespace App\Models;

Use App\Models\Buku;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KategoriBuku extends Model
{
    use HasFactory;

    public function bukus()
    {
        return $this->hasMany(related: Buku::class);
    }
}

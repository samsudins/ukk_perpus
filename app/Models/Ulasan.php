<?php

namespace App\Models;

Use App\Models\Buku;
Use App\Models\User;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ulasan extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(related: User::class);
    }

    public function buku()
    {
        return $this->belongsTo(related: Buku::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    public function user()
{
    return $this->belongsTo(User::class);
}

use HasFactory;

    // Menentukan atribut yang dapat diisi secara massal
    protected $fillable = [
        'name',
        'description',
        'quantity',
        'price',
        'image',
        'user_id', // Tambahkan ini
    ];
}

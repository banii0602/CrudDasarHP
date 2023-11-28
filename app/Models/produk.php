<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class produk extends Model
{
    use HasFactory;

    protected $table = 'produk';
    protected $fillable = ['id_produk', 'nama_produk', 'merk_produk','harga'];
}

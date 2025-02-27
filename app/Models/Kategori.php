<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    use HasFactory;
    protected $fillable = [
        'category_name',
        'deskripsi'
    ];
    public $timestamps = true;

    public function produk()
    {
        return $this->hasMany(Produk::class);
    }
}

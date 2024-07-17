<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_user',
        'tgl_order',
        'total_harga',
        'metode_pembayaran'
    ];
    public $timestamp = true;
    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }
};

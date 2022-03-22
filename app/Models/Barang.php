<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;

    protected $fillable = [
        "name",
        "image",
        "desc",
        "price",
        "stock"
    ];

    public function transaksi(){
        return $this->hasMany(Transaksi::class);
    }
}

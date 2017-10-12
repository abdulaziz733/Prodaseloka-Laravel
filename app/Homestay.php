<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Homestay extends Model
{
    protected $fillable = ['nama', 'alamat', 'harga', 'telepon'];

    public function transaksi()
    {
        return $this->hasMany(Transaksi::class);
    }

}

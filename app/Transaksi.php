<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    protected $fillable = [
      'id_user',
      'no_ktp',
      'id_homestay',
      'checkIn',
      'checkOut',
      'jumlah_hari',
      'jumlah_penginap',
      'total_biaya'
    ];

    public function homestay()
    {
      return $this->belongsTo(Homestay::class);
    }

    public function user()
    {
      return $this->belongsTo(User::class);
    }

}

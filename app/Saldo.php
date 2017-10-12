<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Saldo extends Model
{
    protected $fillable = [
      'id_user',
      'nominal_saldo'
    ];

    public function user()
    {
      return $this->belongsTo(User::class);
    }
}

<?php

namespace App\User;

use Illuminate\Database\Eloquent\Model;

class Wallet extends Model
{
    public function user(){
        return $this->belongsTo('App\User','user_id');
    }
    protected $fillable = [
        'user_id','balance'
    ];
}

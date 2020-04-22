<?php

namespace App\Admin;

use Illuminate\Database\Eloquent\Model;

class Mining extends Model
{
    protected $fillable = ['user_id','package_id','amount','rtn_time','total_rtnd','next','status'];

    public function package() {
    return $this->belongsTo('App\Admin\Package');
    }
}

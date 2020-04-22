<?php

namespace App\Admin;

use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    protected $fillable = ['name','min','max','times','percent','hours','refer','status'];
    
    public function minings(){
        return $this->hasMany('App\Admin\Mining');
    }
}

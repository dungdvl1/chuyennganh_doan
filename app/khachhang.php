<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class khachhang extends Model
{
    //
    protected $table = "khachhang";


    public function ve()
    {
        return $this->hasMany('App\ve', 'id_khachhang', 'id_khachhang');
    }

}
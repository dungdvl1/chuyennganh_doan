<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class nhanvien extends Model
{
    //
    protected $table = "nhanvien";


    public function ve()
    {
        return $this->hasMany('App\ve', 'id_nhanvien', 'id_nhanvien');
    }



}
<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class phim extends Model
{
    //
    protected $table = "phim";

    public function danhgia()
    {
        return $this->hasMany('App\danhgia', 'id_phim', 'id_phim');
    }

    public function suatchieu()
    {
        return $this->hasMany('App\suatchieu', 'id_phim', 'id_phim');
    }

    public function ve()
    {
        return $this->hasMany('App\ve', 'id_phim', 'id_phim');
    }
    

}
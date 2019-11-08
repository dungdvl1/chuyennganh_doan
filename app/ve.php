<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ve extends Model
{
    
    protected $table = "ve";

    public function nhanvien()
    {
        return $this->belongsTo('App\nhanvien', 'id_nhanvien', 'id_ve');
    }

    public function khachhang()
    {
        return $this->belongsTo('App\khachhang', 'id_khachhang', 'id_ve');
    }

    public function phim()
    {
        return $this->belongsTo('App\phim', 'id_phim', 'id_ve');
    }

    public function suatchieu()
    {
        return $this->belongsTo('App\suatchieu', 'id_suatchieu', 'id_ve');
    }

    public function phong()
    {
        return $this->belongsTo('App\phong', 'id_phong', 'id_ve');
    }

    public function ghe()
    {
        return $this->hasOne('App\ghe');
    }

}
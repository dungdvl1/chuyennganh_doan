<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class suatchieu extends Model
{
    protected $table = "suatchieu";

    public function phim()
    {
        return $this->belongsTo('App\phim', 'id_phim', 'id_suatchieu');
    }

    public function giochieu()
    {
        return $this->hasMany('App\giochieu', 'id_suatchieu', 'id_suatchieu');
    }

    public function ve()
    {
        return $this->hasMany('App\ve', 'id_suatchieu', 'id_suatchieu');
    }
    
}
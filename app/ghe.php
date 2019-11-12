<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ghe extends Model
{
    
    protected $table = "ghe";

    public function phong()
    {
        return $this->belongsTo('App\phong', 'id_phong', 'id_ghe');
    }

    public function ve()
    {
        return $this->hasOne('App\ve');
    }

    public function ghe_chon()
    {
        return $this->hasMany('App\ghe_chon', 'id_ghechon', 'id_ghe');
    }
    

}
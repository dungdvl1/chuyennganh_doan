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
    

}
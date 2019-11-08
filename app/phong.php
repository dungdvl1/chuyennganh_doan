<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class phong extends Model
{
    //
    protected $table = "phong";

    public function rap()
    {
        return $this->belongsTo('App\rap', 'id_rap', 'id_phong');
    }

    public function ghe()
    {
        return $this->hasMany('App\ghe', 'id_phong', 'id_phong');
    }

    public function ve()
    {
        return $this->hasMany('App\ve', 'id_phong', 'id_phong');
    }

}
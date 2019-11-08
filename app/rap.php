<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class rap extends Model
{
    protected $table = "rap";

    public function phong()
    {
        return $this->hasMany('App\phong', 'id_rap', 'id_rap');
    }

}
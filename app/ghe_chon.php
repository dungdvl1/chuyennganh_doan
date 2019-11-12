<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ghe_chon extends Model
{
    //
    protected $table = 'ghe_chon';

    public function ghe()
    {
        return $this->hasMany('App\ghe', 'id_ghe', 'id_ghechon');
    }

    public function hang_ghe()
    {
        return $this->hasMany('App\hang_ghe', 'id_hangghe', 'id_ghechon');
    }

}
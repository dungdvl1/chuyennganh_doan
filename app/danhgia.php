<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class danhgia extends Model
{
    //
    protected $table = "danhgia";

    public function phim()
    {
        return $this->belongsTo('App\phim', 'id_phim', 'id_danhgia');
    }

    

}
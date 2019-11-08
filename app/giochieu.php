<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class giochieu extends Model
{
    //
    protected $table = "giochieu";


    public function suatchieu()
    {
        return $this->belongsTo('App\suatchieu', 'id_suatchieu', 'id_giochieu');
    }

}
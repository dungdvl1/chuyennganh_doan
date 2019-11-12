<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class hang_ghe extends Model
{
    //
    protected $table ='hang_ghe';

   public function ghechon()
   {
       return $this->hasMany('App\ghe', 'id_ghechon', 'id_hangghe');
   }
    
}
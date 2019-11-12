<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\phim;
use App\slide;
use App\ghe;
use App\hang_ghe;
use App\ghe_chon;
use App\suatchieu;
use App\giochieu;

class PageController extends Controller
{
    //
    public function getIndex(){
        // get all phim
        $phim = phim::all();
        $slide = slide::all();
        
        // \print_r($slide);

        // return ve trang view va dua du lieu tucontroller qua view
        // use compact('phim') or ['phim' => $phim] 
        // return view("page.trangchu",['phim'=>$phim]);
        return view("page.trangchu",compact('phim','slide'));
    }

    public function getPhim($id){
        $phim = phim::where('id_phim',$id)->first();

        $suatchieu = suatchieu::where('id_phim',$id)->get();

        $id=array();
        foreach ($suatchieu as $key => $value) {
            $id[]=$value->id_suatchieu;
        }

        $giochieu=giochieu::get();
        
        return view('page.chitietphim',\compact('phim','suatchieu','id','giochieu'));
    }

    public function checkout(){
        return view('page.checkout');
    }

    public function chonghe(){

        $hang = hang_ghe::all();
        $soghe=ghe::all();

        return view('page.chonghe',\compact('hang','soghe'));
    }

}
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\phim;
use App\slide;


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

    public function getPhim(){
        return view('page.chitietphim');
    }

    public function checkout(){
        return view('page.checkout');
    }

    public function chonghe(){
        return view('page.chonghe');
    }

}
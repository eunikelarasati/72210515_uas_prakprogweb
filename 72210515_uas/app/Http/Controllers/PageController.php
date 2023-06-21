<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Artikel;

class PageController extends Controller
{
    public function result(){
        $art = Artikel::orderBy('id', 'desc')->paginate(10);;
        return view ("result", ['art' => $art]);
    }
    
    public  function time(){
        date_default_timezone_set("Asia/Bangkok");
        $t = date('H:i:s');
        if($t >= '19:00' && $t <= '02:59'){
            $result = ('Selamat Malam');
            return view('time',['key' => 'time', 'result'=>$result]);
        } else if($t >= '03:00' && $t <= '09:59') {
            $result = ('Selamat Pagi');
            return view('time',['key' => 'time', 'result'=>$result]);
        } else if($t >= '10:00' && $t <= '14:59') {
            $result = ('Selamat Siang');
            return view('time',['key' => 'time', 'result'=>$result]);
        } else if($t >= '15:00' && $t <= '17:59') {
            $result = ('Selamat Sore');
            return view('time',['key' => 'time', 'result'=>$result]);
        } else if($t >= '18:00' && $t <= '18:59') {
            $result = ('Selamat Petang');
            return view('time',['key' =>'time', 'result'=>$result]);
        }
    }
}

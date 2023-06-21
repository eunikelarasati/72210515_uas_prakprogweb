<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function form(){
        return view('form');
    }
    public function processradio(Request $request){
        $text1 = $request -> input('radio');
        echo "Apakah Anda Mahasiswa UKDW? <br>".$text1."</br>";
        echo "<br>";
    }

    public function formcheck(){
        return view('formcheck');
    }
    public function processcheck(Request $request){
        $text = $request->input('test');
        echo "Alasan Masuk UKDW : <br>";
        foreach($text as $i ){
            echo "- ".$i."</br>";
        }
    }
}

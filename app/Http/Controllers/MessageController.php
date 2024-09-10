<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MessageController extends Controller
{
public function morning()
    {
        return view('message.morning');
    }
public function afternoon()
    {
        return view('message.afternoon');
    }
public function evening()
    {
        return view('message.evening');
    }
public function night()
    {
        return view('message.night');
    }
public function var($var){
    {
        return view('message.var',['var' => $var]);
    }
}
public function random(){
    {
        $num = rand(1,4);
            if($num == 1){
            return view('message.random',['ran' => 'おはよう']);
            }
            elseif($num == 2){
            return view('message.random',['ran' => 'こんにちは']);
            }
            elseif($num == 3){
            return view('message.random',['ran' => 'こんばんは']);
            }
            elseif($num == 4){
            return view('message.random',['ran' => 'おやすみなさい']);
            }
    }
}
}

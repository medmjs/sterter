<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SecandController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth')->except('getIndex','getString3');
       }

    public function getString1(){
        return 'secand Controller function 1 String1';
    }

    public function getString2(){
        return 'secand Controller function 2 String2';
    }
    public function getString3(){
        $data=['mohammed','ahmad','omar','ali'];

        return view('aboutlanding',compact('data'));
    }

    public function getString4(){
        return 'secand Controller function 4 String4';
    }

    public function getIndex(){
        $data=[];
        $data['name']='Mohammed Emad';
        $data['age']='35';

        return view('welcome')->with($data);
    }

}

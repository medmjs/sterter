<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class FirstControllor extends Controller
{
    public function firstString(){
        return "hi First Cntrolles";
    }
}

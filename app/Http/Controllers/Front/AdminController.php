<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\VerifiesEmails;

class AdminController extends Controller
{
    public function getAdmin(){
        return 'Mohammed Abusnaimeh';
    }
}

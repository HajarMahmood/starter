<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller ;

class SecondControlle extends Controller
{
    //
    public function __construct(){
        $this -> middleware(middleware:'auth')->except(methods: 'showString2');
    }
    
    public function showString0(){
        return 'static string 0';
    }
    public function showString1(){
        return 'static string 1';
    }
    public function showString2(){
        return 'static string 2';
    }

}

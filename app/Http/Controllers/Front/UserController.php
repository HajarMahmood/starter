<?php
namespace App\Http\Controllers\Front;
use Illuminate\Routing\Controller ;

class UserController extends Controller
{
     public function showUserName(){
        return 'Hajar ';
   }
   public function getIndex(){

      // $date = [];
      // $date['id'] = 6;
      // $date['name'] = 'hajar';


      $date = ['Hajar','Ali'];
      // $obj =new \stdClass();
      // $obj -> name = 'Hajar';
      // $obj -> id = 7;


      // return view('welcome', compact('obj'));

      // return view('welcome', $date);
      return view('welcome', compact('date'));
   }
}

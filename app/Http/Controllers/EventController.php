<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class EventController extends Controller
{
    public function Event(){
       $event=DB::table('event')->get();
            return view('welcome', ['eventkey'=>$event]);
    }


    public function checkout($id){

        $event=DB::table('event')
        -> where('id','=',$id)
        ->get();
        return view('checkout', ['eventkey'=>$event]);
    }
    public function invoice (Request $Request) {
        $row = [
            'fullName' => $Request -> inputName, 
            'phone' => $Request -> inputPhone, 
            'email' => $Request -> inputEmail,
            'title' => $Request -> title,
            'text' => $Request -> text,
            'price' => $Request -> price,
            'date' => $Request -> date,
            'city' => $Request -> city
        ];
        DB::table('invoice') -> insert($row);

        $row2 = DB::table('invoice')
        ->where ('phone','=', $Request -> inputPhone)
        ->first();
        return view ('invoice', ['invoice'=>$row2]);

       }

}

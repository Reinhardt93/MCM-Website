<?php
namespace App\Http\Controllers;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Cookie;

class CookieController extends Controller {
   public function setCookie(\stdClass $request){
     $minutes = 60;
     $response = new Response(view('panel.panel'));
     $response->withCookie(cookie('userInfo', $request, $minutes));
     return $response;
   }
   public function getCookie(){
       $val = cookie::get('userInfo');
       return $val;
   }

    public function getUsername(){
        $cookie = cookie::get('userInfo');
        return $cookie->message->username;
    }

    public function getShopID(){
        $cookie = cookie::get('ShopID');
        return $cookie->message->shopID;
    }
}
?>

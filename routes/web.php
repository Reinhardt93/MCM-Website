<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use GuzzleHttp\Client;

Route::get('/', function () {
    return view('intro');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/customers', function () {
    return view('customers');
});
Route::get('/pricing', function () {
    return view('pricing');
});
Route::get('/products', function () {
    return view('products');
});
Route::get('/login', function () {
    return view('login');
});

Route::post('/registerUser', function () {
if($_POST['password'] == $_POST['passwordCheck']){
  $client = new Client();
        $res = $client->request('POST', 'http://207.154.220.153/register', [
            'form_params' => [
                'username' => $_POST['username'],
                'email' => $_POST['email'],
                'password' => $_POST['password'],
                'userRole' => 2,
                'shopID' => 2
            ]
        ]);
        //echo $res->getBody();

  }else{
    return 'Passwords do not match';
  }
});

Route::post('/signIn', function () {
  $client = new Client();
        $res = $client->request('POST', 'http://207.154.220.153/login', [
            'form_params' => [
                'email' => $_POST['email'],
                'password' => $_POST['password']
            ]
        ]);

        if($res->getStatusCode() == 200){
          $cookie = app('App\Http\Controllers\CookieController');
          $body = json_decode($res->getBody());
          return $cookie->setCookie($body);
        }else{
          return 'Username or Password is incorrect, please try again.';
        }
});

/* Panel Views */
Route::get('/approvals', function () {
    $cookie = app('App\Http\Controllers\CookieController');
    if(is_null($cookie->getCookie())){
        return view('intro');
    }else{
        return view('panel.approvals');
    }
});
Route::get('/campaign', function () {
    $cookie = app('App\Http\Controllers\CookieController');
    if(is_null($cookie->getCookie())){
        return view('intro');
    }else{
        return view('panel.campaign');
    }
});
Route::get('/companies', function () {
    $cookie = app('App\Http\Controllers\CookieController');
    if(is_null($cookie->getCookie())){
        return view('intro');
    }else{
        return view('panel.companies');
    }
});
Route::get('/my_campaign', function () {
    $cookie = app('App\Http\Controllers\CookieController');
    if(is_null($cookie->getCookie())){
        return view('intro');
    }else{
        return view('panel.my_campaign');
    }
});
Route::get('/panel', function () {
    return view('panel.panel');
});
Route::get('/workers', function () {
    $cookie = app('App\Http\Controllers\CookieController');
    if(is_null($cookie->getCookie())){
        return view('intro');
    }else{
        return view('panel.workers');
    }
});

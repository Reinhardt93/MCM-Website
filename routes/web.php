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
  $cookie = app('App\Http\Controllers\CookieController');
  if(is_null($cookie->getCookie())){
      return view('login');
  }else{
      return view('panel.panel');
  }

});
Route::get('/404', function(){
  return view('404');
});

Route::get('/logout', 'CookieController@removeCookie');

Route::post('/registerUser', function () {
if($_POST['password'] == $_POST['passwordCheck']){
  $client = new Client();
        $res = $client->request('POST', 'http://207.154.220.153/register', [
            'form_params' => [
                'username' => $_POST['username'],
                'email' => $_POST['email'],
                'password' => $_POST['password'],
                'userRole' => 'Shop Owner',
                'shopID' => 2
            ]
        ]);
        return view('login');

  }else{
    return 'Passwords do not match';
  }
});

Route::post('/AddWorker', function () {
    if($_POST['password'] == $_POST['passwordCheck']){
        $client = new Client();
        $res = $client->request('POST', 'http://207.154.220.153/register', [
            'form_params' => [
                'username' => $_POST['username'],
                'email' => $_POST['email'],
                'password' => $_POST['password'],
                'userRole' => 'Employee',
                'shopID' => $cookie->message->shopID,
            ]
        ]);
        return view('panel.workers');

    }else{
        return 'Passwords do not match';
    }
});

Route::post('/signIn', function () {
  // Start a new Guzzle client and send form data to sign in
  $client = new Client();
        $res = $client->request('POST', 'http://207.154.220.153/login', [
            'form_params' => [
                'email' => $_POST['email'],
                'password' => $_POST['password']
            ]
        ]);

        // Decode the response from the API and turn into an assoc array
        $login = json_decode($res->GetBody()->GetContents(), true);

        // Check if response has api_token
        if(isset($login['api_token'])) {

          // Call the Cookie Controller
          $cookie = app('App\Http\Controllers\CookieController');
          $body = json_decode($res->getBody());

          // Set the cookie with the body from the API response
          return $cookie->setCookie($body);
        }else{
          // If login is incorrect redirect back to /login route
          return redirect('/login');
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
Route::post('/sendcampaignproposal', 'CampaignsController@SendCampaignProposal');
Route::get('/activate/{id}', 'CampaignsController@ApproveCampaign');
Route::get('/decline/{id}', 'CampaignsController@DeclineCampaign');

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
    $cookie = app('App\Http\Controllers\CookieController');
    if(is_null($cookie->getCookie())){
        return view('intro');
    }else{
        return view('panel.panel');
    }
});
Route::get('/workers', function () {
    $cookie = app('App\Http\Controllers\CookieController');
    if(is_null($cookie->getCookie())){
        return view('intro');
    }else{
        return view('panel.workers');
    }
});

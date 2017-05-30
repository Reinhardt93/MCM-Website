<?php
namespace App\Http\Controllers;
use Illuminate\Http\Response;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;

class ShopsController extends Controller{

    public function GetUsers(){
        $client = new Client(['base_uri' => 'http://207.154.220.153/']);
        $res = $client->get('/users');
        $res = json_decode($res->GetBody()->GetContents(), true);
        $res = $res['result'];
        return $res;
    }
}

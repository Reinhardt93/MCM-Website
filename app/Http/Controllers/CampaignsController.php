<?php
namespace App\Http\Controllers;
use Illuminate\Http\Response;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;

class CampaignsController extends Controller{
    public function GetAllCampaigns(){
        $array = [];
        $client = new Client(['base_uri' => 'http://207.154.220.153/']);
        $res = $client->get('/shops');
        $res = json_decode($res->GetBody()->GetContents(), true);
       // foreach ($array as $item){

        //}
        return $res;//->result[0];
    }
}
?>

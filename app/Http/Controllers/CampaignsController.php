<?php
namespace App\Http\Controllers;
use Illuminate\Http\Response;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;

class CampaignsController extends Controller{

    public function GetAllCampaigns(){
        $client = new Client(['base_uri' => 'http://207.154.220.153/']);
        $res = $client->get('/campaigns/active');
        $res = json_decode($res->GetBody()->GetContents(), true);
        $res = $res['result'];
        return $res;
    }

    public function SendCampaignProposal(){

        $client = new Client(['base_uri' => 'http://207.154.220.153/']);
        $res = $client->request('POST', '/campaigns/proposal/create?api_key=a8b8acae610fafdaf48cb886fd67584235a68049',[
            'form_params' => [
                'title' => $_POST['title'],
                'description' => $_POST['description'],
                'image' => $_POST['image'],
                'dateStarts' => $_POST['dateStarts'],
                'dateEnds' => $_POST['dateEnds'],
                'shopID' => $_POST['shopID']
            ]
        ]);
        if($res->getStatusCode() == 200){
          return view('panel.campaign');
        }
    }

    public function GetAllProposedCampaigns(){
        $client = new Client(['base_uri' => 'http://207.154.220.153/']);
          $res = $client->get('/campaigns/proposal?api_token=a8b8acae610fafdaf48cb886fd67584235a68049');
        $res = json_decode($res->GetBody()->GetContents(), true);
        $res = $res['result'];
        return $res;
    }
}
?>

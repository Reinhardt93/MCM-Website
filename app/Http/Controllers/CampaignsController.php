<?php
namespace App\Http\Controllers;
use Illuminate\Http\Response;
use Illuminate\Http\Request;
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
        $path = request()->file('image')->store('/img');
        $client = new Client(['base_uri' => 'http://207.154.220.153/']);
        $res = $client->request('POST', '/campaigns/proposal/create?api_token=38e8e92c1694bcc8e77895592280eb2d6a27819c',[
            'form_params' => [
                'title' => $_POST['title'],
                'description' => $_POST['description'],
                'image' => $path, //$_POST['image'],
                'dateStarts' => $_POST['dateStarts'],
                'dateEnds' => $_POST['dateEnds'],
                'shopID' => $_POST['shopID']
            ]
        ]);
        if($res->getStatusCode() == 200){
          return back();
        }
    }

    public function GetAllProposedCampaigns(){
        $client = new Client(['base_uri' => 'http://207.154.220.153/']);
        $res = $client->get('/campaigns/proposal?api_token=a8b8acae610fafdaf48cb886fd67584235a68049');
        $res = json_decode($res->GetBody()->GetContents(), true);
        $res = $res['result'];
        return $res;
    }

    public function ApproveCampaign($id){
      $client = new Client(['base_uri' => 'http://207.154.220.153/']);
      $res = $client->get('/campaigns/proposal/activate/' . $id . '?api_token=a8b8acae610fafdaf48cb886fd67584235a68049');
      return redirect('/approvals');
    }

    public function DeclineCampaign($id){
      $client = new Client(['base_uri' => 'http://207.154.220.153/']);
      $res = $client->get('/campaigns/proposal/delete/' . $id . '?api_token=a8b8acae610fafdaf48cb886fd67584235a68049');
      return redirect('/approvals');
    }
}
?>

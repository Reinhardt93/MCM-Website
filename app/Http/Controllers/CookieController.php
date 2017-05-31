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
      if(isset($cookie)) {
          return ', ' . $cookie->message->username;
      } else {
          return '';
      }
    }

    public function getUserRole(){
        $cookie = cookie::get('userInfo');
        if(isset($cookie)) {
            return "You're logged in as <span id=\"workPos\">" . $cookie->message->userRole . '</span>';
        } else {
            return '';
        }
    }

    public function removeCookie(){
      $cookie = cookie::forget('userInfo');
      return redirect('/')->withCookie($cookie);
    }

    public function IsAdmin(){
        $cookie = cookie::get('userInfo');
        if(isset($cookie) &&  $cookie->message->userRole == 'Admin') {
            echo '
            <ul>
            <a href="panel"><li>Information</li></a>
            <span class="numberappr">3</span> <a href="approvals"><li>Pending Approvals</li></a>
            <a href="my_campaign"><li>All Campaigns</li></a>
            <a href="companies"><li>List of Shops</li></a>
            </ul>
              <ul style="float:right;margin-right:55px;cursor:pointer;">
              <li onclick="Billing()">Billing</li>
              </ul>
            ';
        } else if(isset($cookie) && $cookie->message->userRole == 'Employee'){
            echo '
              <ul>
              <a href="panel"><li>Information</li></a>
              <a href="workers"><li>Co-workers</li></a>
              <a href="my_campaign"><li>Current Campaigns</li></a>
              <a href="campaign"><li>Add New Campaign</li></a>
              </ul>
             ';
        } else{
            echo '
              <ul>
              <a href="panel"><li>Information</li></a>
              <a href="workers"><li>Co-workers</li></a>
              <a href="my_campaign"><li>Current Campaigns</li></a>
              <a href="campaign"><li>Add New Campaign</li></a>
              </ul>
            ';
        }
    }

    public function AdminTitle(){
        $cookie = cookie::get('userInfo');
        if(isset($cookie) &&  $cookie->message->userRole == 'Admin') {
            echo 'All Campaigns';
        }  else{
            echo 'Current Campaign(s)';
        }
    }

    public function AdminAddCampaign()
    {
        $cookie = cookie::get('userInfo');
        if (isset($cookie) && $cookie->message->userRole == 'Admin') {
            echo '
               <p style="margin-top:187px;">Here\'s a list of all the shops active campaigns.</p>
               <p>If you wish to add a new one as an admin, continue below:</p>
               <a href="/campaign" style="margin-left:192px;" id="reactbtn">Add Campaign</a>
               ';
        } elseif (isset($cookie) && $cookie->message->userRole == 'Trial'){
            echo '
               <p style="margin-top:187px;">Here\'s a list of all the shops active campaigns.</p>
               <p>Since you\'re on a Trial account, you cannot add a new campaign.</p>
               ';
        } else{
            echo '
               <p style="margin-top:187px;">Here\'s a list of all your active campaigns.</p>
               <p>If you wish to add a new one, continue below:</p>
               <a href="/campaign" style="margin-left:192px;" id="reactbtn">Add Campaign</a>
               ';
        }

    }

    public function WorkerRank(){
        $cookie = cookie::get('userInfo');
        if(isset($cookie) &&  $cookie->message->userRole == 'Shop Owner') {
            echo '
             <div id="actual_news">
             <h1>Add Employee</h1>
             <form action="AddWorker" method="POST">
             <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
             <input type="text" name="email" placeholder="Email" />
             <input type="text" name="username" placeholder="User Name" />
             <input type="password" name="password" placeholder="Password" />
             <input type="password" name="passwordCheck" placeholder="Password" />
             <input id="mcm_loginbutton" style="line-height:0.6;width:98%;" type="submit" value="Add Employee" />
             </form>
             </div>
            ';
        } else{
            echo '

            ';
        }
    }

    public function AccountStatus(){
        $cookie = cookie::get('userInfo');
        if(isset($cookie) &&  $cookie->message->userRole == 'Admin') {
            echo '
                <img src="img/logo.png">
                <p>You\'re currently logged in with an <span>Admin</span> account.</p>
                <p>You have full access across the control panel.</p>
                <p>Your next billing is due 01/07/2017</p>
            ';
        } else if(isset($cookie) && $cookie->message->userRole == 'Employee'){
            echo '
                <img src="img/logo.png">
                <p>You\'re currently logged in with an <span>Employee</span> account.</p>
                <p>Your business owner, has granted you permission to send campaign requests.</p>
             ';
        } else if(isset($cookie) && $cookie->message->userRole == 'Shop Owner'){
            echo '
                <img src="img/logo.png">
                <p>You\'re currently logged in with an <span>Shop Owner</span> account.</p>
                <p>You have access to sending campaign requests, and add co-workers.</p>
             ';
        } else{
            echo '
                <img src="img/logo.png">
                <p>You\'re currently logged in with a <span>Trial</span> account.</p>
                <p>You will not be able to add campaigns, or co-workers.</p>
                <p>This is only a DEMO of how the Control Panel works.</p>
            ';
        }
    }

}
?>

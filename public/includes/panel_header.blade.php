<div id="youare">
  <p>Welcome<?php echo App::make("App\Http\Controllers\CookieController")->getUsername(); ?>.
    <?php echo App::make("App\Http\Controllers\CookieController")->getUserRole();?></p>
    <a href="/" class="c_logout">(Log out)</a>

<script type="text/javascript">
  tday=new Array("Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday");
  tmonth=new Array("January","February","March","April","May","June","July","August","September","October","November","December");

  function GetClock(){
    var d=new Date();
    var nday=d.getDay(),nmonth=d.getMonth(),ndate=d.getDate(),nyear=d.getYear();
    if(nyear<1000) nyear+=1900;
    var nhour=d.getHours(),nmin=d.getMinutes(),nsec=d.getSeconds();
    if(nmin<=9) nmin="0"+nmin
    if(nsec<=9) nsec="0"+nsec;

    document.getElementById('clockbox').innerHTML=""+tday[nday]+", "+tmonth[nmonth]+" "+ndate+", "+nyear+" "+nhour+":"+nmin+":"+nsec+"";
  }

  window.onload=function(){
    GetClock();
    setInterval(GetClock,1000);
  }
</script>
<div id="clockbox"></div>


</div>

<div id="c_paneltop">
  <div id="ourlogo">
    <img src="img/logo2.png" alt="Logo Mall Campaign Manager">
  </div>
  <div id="shoplogo">
    <img src="img/logo2.png" alt="Logo Shop">
  </div>
</div>
<div id="c_menu">
  <ul>
    <a href="panel"><li>Information</li></a>
    <a href="workers"><li>Co-workers</li></a>
    <a href="my_campaign"><li>Current Campaigns</li></a>
    <a href="campaign"><li>Add New Campaign</li></a>
  </ul>

<!-- Admin Menu -->
  <ul style="float:right;margin-right:30px;">
    <span class="numberappr">3</span> <a href="approvals"><li>Pending Approvals</li></a>
    <a href="companies"><li>List of Shops</li></a>
  </ul>
</div>

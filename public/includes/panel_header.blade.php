<?php
if(isset($_GET['logout'])) {
    setcookie("userInfo", null, 1);
    header('Location: /');
    exit;
}
?>

<div id="youare">
  <p>Welcome<?php echo App::make("App\Http\Controllers\CookieController")->getUsername(); ?>.
    <?php echo App::make("App\Http\Controllers\CookieController")->getUserRole();?></p>
    <a href="?logout" class="c_logout">(Log out)</a>

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
<!-- Admin Menu -->
    <?php App::make("App\Http\Controllers\CookieController")->IsAdmin();?>
</div>

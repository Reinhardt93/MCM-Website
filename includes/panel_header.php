<div id="youare">
<p>Welcome, NAME HERE. You're logged in as
  <span id="workPos">POSITION</span></p>
    <a href="../index.php" class="c_logout">(Log out)</a>

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

    <p id="department">Department: <span>PLACE OF WORK</span></p>
</div>

<div id="c_paneltop">
  <div id="ourlogo">
    <img src="../assets/img/logo2.png" alt="Logo Mall Campaign Manager">
  </div>
  <div id="shoplogo">
    <img src="../assets/img/logo2.png" alt="Logo Shop">
  </div>
</div>
<div id="c_menu">
  <ul>
    <a href="panel.php"><li>Information</li></a>
    <a href="workers.php"><li>Co-workers</li></a>
    <a href="my_campaign.php"><li>My Campaigns</li></a>
    <a href="campaign.php"><li>Add New Campaign</li></a>
  </ul>

<!-- Admin Menu -->
  <ul style="float:right;margin-right:30px;">
    <span class="numberappr">3</span> <a href="approvals.php"><li>Pending Approvals</li></a>
    <a href="companies.php"><li>List of Companies</li></a>
  </ul>
</div>

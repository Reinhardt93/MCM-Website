<!DOCTYPE HTML>
<html>
<head>
  <title>Mall Campaign Manager</title>
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
  <script src="js/jquery-3.2.1.min.js"></script>
  <link rel="stylesheet" href="css/font-awesome.min.css">
</head>
<body>

<?php include("includes/panel_header.blade.php");?>

  <div id="c_box">
    <div id="c_box_top"></div>
    <div id="c_latest_updates">
      <h1 class="c_name">Current Campaign(s)</h1>
    </div>
    <div id="user_info">
      <?php
      $data = App::make("App\Http\Controllers\CampaignsController")->GetAllCampaigns();
      //print_r($data);
      //json_decode($data);
      //var_dump($data);
      foreach($data as $item) {
        foreach($item as $key) {
         print_r($key);
         echo "</br>";
       };
      };
      ?>
    </div>

    <div id="actual_news">

    </div>
  </div>

</body>
</html>

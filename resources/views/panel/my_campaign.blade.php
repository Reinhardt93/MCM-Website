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
      <h1 class="c_name"><?php echo App::make("App\Http\Controllers\CookieController")->AdminTitle();?></h1>
    </div>
    <div id="user_info">
      <div id="wrapit">
      <?php
      // Get the controller function data as $data
      $data = App::make("App\Http\Controllers\CampaignsController")->GetAllCampaigns();

      // loop though the $data in the results array and access specific data as associative targeting
      foreach($data as $item) {
        echo "<div class='camp_wrap'>";
        echo "<div class='title'>" . $item['title'] . "</div>";
        echo "<div class='description'>" . $item['description'] . "</div>";
        echo "<div class='image'><img src='img/profiloptik.jpg'></div>";
        echo "<div class='date'>Starts: " . $item['dateStarts'] . "</div>";
        echo "<div class='date'>Ends: " . $item['dateEnds'] . "</div>";
        echo "</div>";
      };
      ?>
    </div>
    </div>

    <div id="actual_news">
        <?php echo App::make("App\Http\Controllers\CookieController")->AdminAddCampaign();?>
    </div>
  </div>

</body>
</html>

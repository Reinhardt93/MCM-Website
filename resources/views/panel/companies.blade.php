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
      // Get the controller function data as $data
      $data = App::make("App\Http\Controllers\shopsController")->GetAllShops();

      // loop though the $data in the results array and access specific data as associative targeting
      foreach($data as $item) {
        echo "<div>";
        echo "<div class='shopname'>" . $item['shopName'] . "</div>";
        echo "<div class='desciption'>" . $item['description'] . "</div>";
        echo "<div class='openingHours'>" . $item['openingHours'] . "</div>";
        echo "<div class='phoneNumber'>" . $item['phoneNumber'] . "</div>";
        echo "<div class='shopImage'> <img src=/img/" . $item['shopImage'] . "> </div>";
        echo "</div>";
      };
      ?>
    </div>

    <div id="actual_news">

    </div>
  </div>

</body>
</html>

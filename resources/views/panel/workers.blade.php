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
      <h1 class="c_name">Co-Workers</h1>
    </div>
    <div id="user_info">
      <ul>
        <li><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Lise Henriksen</li>
        <li><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Christian Børge</li>
        <li><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Bobby Mc. Bob</li>
        <li><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Bøllebob Jensen</li>
      </ul>


        <?php
            /* ADD NEW EMPLOYEE
        // Get the controller function data as $data
        $data = App::make("App\Http\Controllers\WorkersController")->GetUsers();

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
            */
        ?>

    </div>

      <?php echo App::make("App\Http\Controllers\CookieController")->WorkerRank();?></p>
  </div>

</body>
</html>

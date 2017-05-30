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
      <h1 class="c_name">Welcome Back<?php echo App::make("App\Http\Controllers\CookieController")->getUsername(); ?></h1>
      <h1 class="c_updates">Latest Updates</h1>
    </div>
    <div id="user_info">
      <div id="account_status">
        <?php echo App::make("App\Http\Controllers\CookieController")->AccountStatus();?>
      </div>
    </div>
    <div id="actual_news">
      <?php

      // Get the controller function data as $data
      $data = App::make("App\Http\Controllers\NewsController")->GetAllNews();

      // loop though the $data in the results array and access specific data as associative targeting
      foreach($data as $item) {
        echo "<div class='news_item'>";
        echo "<h2>" . $item['title'] . "</h2>";
        echo "<p>" . $item['content'] . "</p>";
        echo "</div>";
      };

      ?>
    </div>
  </div>

<script>
    function Billing() {
        alert("This is a demo, no payments implemented. Only the Shop Owner will have access to this page when it's available.");
    }
</script>
</body>
</html>

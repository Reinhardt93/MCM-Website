<!DOCTYPE HTML>
<html>
<head>
  <title>Mall Campaign Manager</title>
  <link rel="stylesheet" type="text/css" href="../assets/css/style.css">
  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
  <script src="../assets/js/jquery-3.2.1.min.js"></script>
  <link rel="stylesheet" href="../assets/css/font-awesome.min.css">
</head>
<body>

<?php include("../includes/panel_header.php");?>

  <div id="c_box">
    <div id="c_box_top"></div>
    <div id="c_latest_updates">
      <h1 class="c_name">Add New Campaign</h1>
    </div>

      <form class="cf">
  <div class="half left cf">
    <input type="text" id="input-name" placeholder="Name of Campaign">
    <input type="email" id="input-email" placeholder="Anything Else?">
    <input type="text" id="input-subject" placeholder="Anything Else?">
    <p style="padding-top:10px;">Select Start and End Date</p>
<input type="date" name="bday" max="2050-01-01">
<input type="date" name="bday" min="2017-01-01">
  </div>
  <div class="half right cf">
    <textarea name="message" type="text" id="input-message" placeholder="Additional Information"></textarea>
    <input type="file" name="pic" accept="image/*">
  </div>
  <input style="width:100%;padding:8px;" type="submit" value="Submit Campaign" id="reactbtn">
</form>


  </div>

</body>
</html>

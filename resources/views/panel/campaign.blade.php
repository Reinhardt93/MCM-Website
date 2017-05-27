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
      <h1 class="c_name">Add New Campaign</h1>
    </div>

    <!-- <form class="cf" action="/sendcampaignproposal" method="post">
       {{ csrf_field() }}
      <div class="half left cf">
        <input type="text" id="input-name" placeholder="Name of Campaign">
        <input type="text" id="input-image" placeholder="image path">
        <input type="text" id="input-shopID" placeholder="Anything Else?">
        <p style="padding-top:10px;">Select Start and End Date</p>
        <input type="date" id="input-dateStarts" name="bday" max="2050-01-01">
        <input type="date" id="input-dateEnds" name="bday" min="2017-01-01">
      </div>
      <div class="half right cf">
        <textarea name="message" type="text" id="input-description" placeholder="description"></textarea>
        <input type="file" name="pic" accept="image/*">
      </div>
      <input style="width:100%;padding:8px;" type="submit" value="Submit Campaign" id="reactbtn">
    </form> -->

    {!! Form::open(['url' => 'sendcampaignproposal']) !!}
      {!! Form::text('title', 'title', ['id' => 'title']) !!}
      {!! Form::text('image', 'image here', ['id' => 'image']) !!}
      {!! Form::text('description', 'description', ['id' => 'description']) !!}
      {!! Form::text('shopID', 'shopID', ['id' => 'shopID']) !!}
      {!! Form::date('dateStarts', \Carbon\Carbon::now(), ['id' => 'dateStarts'] ) !!}
      {!! Form::date('dateEnds', \Carbon\Carbon::now(), ['id' => 'dateEnds']) !!}
      {!! Form::submit('Click Me!') !!}
    {!! Form::close() !!}




  </div>

</body>
</html>

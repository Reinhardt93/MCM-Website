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


    {!! Form::open(['url' => 'sendcampaignproposal', 'files' => true]) !!}
      {!! Form::text('title', null, ['name' => 'title', 'id' => 'title', 'placeholder' => 'Title']) !!}
      {!! Form::text('image', null, ['name' => 'image', 'placeholder' => 'image title' ]) !!}
      {!! Form::file('image') !!}
      {!! Form::text('description', null, ['name' => 'description', 'placeholder' => 'Description']) !!}
      {!! Form::select('Choose shop', ['1' => 'Profiloptik', '3' => 'Theile', '4' => 'Pilgrim'], null, ['placeholder' => 'Choose a shop', 'class' => 'dropdown-list', 'name' => 'shopID']) !!}
      {!! Form::date('dateStarts', \Carbon\Carbon::now(), ['name' => 'dateStarts'] ) !!}
      {!! Form::date('dateEnds', \Carbon\Carbon::now(), ['name' => 'dateEnds']) !!}
      {!! Form::submit('Click Me!') !!}
    {!! Form::close() !!}




  </div>

</body>
</html>

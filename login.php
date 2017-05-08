<!DOCTYPE HTML>
<html>
<head>
  <title>Mall Campaign Manager</title>
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <script src="assets/js/jquery-3.2.1.min.js"></script>

    <style>
    body{
      width:100%;
      height:90%;
      background-image:url('assets/img/background.jpg');
      background-size:cover;
    }
    </style>
</head>
<body>

  <div id="mcm_wrap">
    <div id="mcm_topcarrier">
      <a href="index.php"><img id="mcm_logo" src="assets/img/logo2.png" alt="Mall Campaign Manager Logo"></a>
      <div id="mcm_language">
        <img src="assets/img/dk.gif" class="mcm_flag-dk">
        <img src="assets/img/en.gif" class="mcm_flag-en">
      </div>
    </div>

    <div id="mcm_content_area">
      <div id="mcm_form_carrier">
        <div id="mcm_form_fade">
            <h2 id="mcm_title" style="margin-top:90px;">Sign In</h2>
        <form>
          <input type="text" name="username" placeholder="Username" />
          <input type="password" name="password" placeholder="Password" />
          <input id="mcm_loginbutton" type="submit" value="Login" />
        </form>

        <div id="mcm_forgotpasswrap">
          <a href="#" id="mcm_forgotpass">Forgot my Username or Password</a>
        </div>
        </div>
        <div id="mcm_forgot_carrier">
          <img src="assets/img/arrow_left.png" id="mcm_goback">
          <h2 id="mcm_title" style="margin-top:90px;">Reset Password/Username</h2>
      <form>
        <input type="email" name="email" placeholder="Email" />
        <input id="mcm_loginbutton" type="submit" value="Reset" />
      </form>

      <div id="mcm_forgotpasswrap">
        <a href="#" id="mcm_forgotpass" style="margin-left:75px;">Get help!</a>
      </div>
        </div>
    </div>


      <script>
      $(".mcm_flag-dk").click(function() {
        $(".mcm_flag-dk").hide();
        $(".mcm_flag-en").show();
      });
      $(".mcm_flag-en").click(function() {
        $(".mcm_flag-en").hide();
        $(".mcm_flag-dk").show();
      });

      $("#mcm_forgotpass").click(function() {
        $("#mcm_form_fade").fadeOut();
        $("#mcm_forgot_carrier").delay(500).fadeIn();
      });

      $("#mcm_goback").click(function() {
        $("#mcm_form_fade").delay(500).fadeIn();
        $("#mcm_forgot_carrier").fadeOut();
      });
      </script>
      <div id="mcm_news_carrier">
        <h2 id="mcm_title">Latest Updates</h2>
        <div id="mcm_news_inner">
          <!-- Make database stuff -->
          <div id="mcm_news_item">
            <h2 id="mcm_title">dope 420 blaze it</h2>
            <p id="mcm_newstext">En søgning på Lorem Ipsum afslører mange websider, som stadig er på udviklingsstadiet. Der har været et utal af variationer, som er opstået enten på grund af fejl og andre gange med vilje (som blandt andet et resultat af humor).</p>
          </div>

          <div id="mcm_news_item">
            <h2 id="mcm_title">dope 420 blaze it</h2>
            <p id="mcm_newstext">En søgning på Lorem Ipsum afslører mange websider, som stadig er på udviklingsstadiet. Der har været et utal af variationer, som er opstået enten på grund af fejl og andre gange med vilje (som blandt andet et resultat af humor).</p>
          </div>

          <div id="mcm_news_item">
            <h2 id="mcm_title">dope 420 blaze it</h2>
            <p id="mcm_newstext">En søgning på Lorem Ipsum afslører mange websider, som stadig er på udviklingsstadiet. Der har været et utal af variationer, som er opstået enten på grund af fejl og andre gange med vilje (som blandt andet et resultat af humor).</p>
          </div>

          <div id="mcm_news_item">
            <h2 id="mcm_title">dope 420 blaze it</h2>
            <p id="mcm_newstext">En søgning på Lorem Ipsum afslører mange websider, som stadig er på udviklingsstadiet. Der har været et utal af variationer, som er opstået enten på grund af fejl og andre gange med vilje (som blandt andet et resultat af humor).</p>
          </div>

          <div id="mcm_news_item">
            <h2 id="mcm_title">dope 420 blaze it</h2>
            <p id="mcm_newstext">En søgning på Lorem Ipsum afslører mange websider, som stadig er på udviklingsstadiet. Der har været et utal af variationer, som er opstået enten på grund af fejl og andre gange med vilje (som blandt andet et resultat af humor).</p>
          </div>

        </div>
      </div>
    </div>
  </div>

</body>
</html>

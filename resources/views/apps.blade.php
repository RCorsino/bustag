<!DOCTYPE html>
<html>
<head>
  <title>BusTap</title>
</head>
<body>

</body>
</html><head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="{{ URL::asset('back-to-top/css/reset.css')}}">
  <link rel="stylesheet" href="{{ URL::asset('back-to-top/css/style.css')}}">
  <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css')">
  <link rel="stylesheet" href="{{ URL::asset('css/custom.css')}}">

  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="resources/assets/js/active.js"></script>
  <script src="resources/assets/back-to-top/js/main.js"></script>

  <script type="text/javascript">
    $( document ).ready(function() {
        $('.nav').on('click', 'li', function(){
          $('.nav li').removeClass('active');
          $(this).addClass('active');
      });
    });
  </script>

</head>
<body>
  <div class="container-fluid">
      <div class="row profile">
        <div class="col-md-3 ">
      <?php include 'header.php' ?>
      </div>
      <div class="col-md-9 ">
              <div class="profile-content mybox">
          <?php
          if (!isset($_GET['page'])) {
            include 'welcome.php';
          }
          else
          {
            include $_GET['page'].'.php';
          }
          ?>
              </div>
      </div>
    </div>
    <a href="#0" class="cd-top">Top</a>

  </div>
</body>
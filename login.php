<?php
include "inc/config.php";
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Sistem Konservasi Energi | Login</title>

<link href="<?php echo $adminthemepath ?>css/bootstrap.min.css" rel="stylesheet">
<link href="<?php echo $adminthemepath ?>css/datepicker3.css" rel="stylesheet">
<link href="<?php echo $adminthemepath ?>css/styles.css" rel="stylesheet">

<!--[if lt IE 9]>
<script src="<?php echo $adminthemepath ?>js/html5shiv.js"></script>
<script src="<?php echo $adminthemepath ?>js/respond.min.js"></script>
<![endif]-->

</head>

<body>

  <div class="row">
    <div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
      <div class="login-panel panel panel-default">
        <div class="panel-heading">Log in Aplikasi Sistem Konservasi Energi</div>
        <div class="panel-body">
          <form role="form" method="post" action="getlogin.php" >
            <fieldset>
              <div class="form-group">
                <input class="form-control" placeholder="Nama pengguna" name="login" type="username" autofocus="">
              </div>
              <div class="form-group">
                <input class="form-control" placeholder="Password" name="password" type="password" >
              </div>
              <div class="form-group">
              <a href="register.php" />Daftar</a>
              </div>
              <input type="submit" class="btn btn-primary"></input>
            </fieldset>
          </form>
        </div>
      </div>
    </div><!-- /.col-->
  </div><!-- /.row -->

  <script src="<?php echo $adminthemepath ?>js/jquery-1.11.1.min.js"></script>
  <script src="<?php echo $adminthemepath ?>js/bootstrap.min.js"></script>
  <script src="<?php echo $adminthemepath ?>js/chart.min.js"></script>
  <script src="<?php echo $adminthemepath ?>js/chart-data.js"></script>
  <script src="<?php echo $adminthemepath ?>js/easypiechart.js"></script>
  <script src="<?php echo $adminthemepath ?>js/easypiechart-data.js"></script>
  <script src="<?php echo $adminthemepath ?>js/bootstrap-datepicker.js"></script>
  <script>
    !function ($) {
      $(document).on("click","ul.nav li.parent > a > span.icon", function(){
        $(this).find('em:first').toggleClass("glyphicon-minus");
      });
      $(".sidebar span.icon").find('em:first').addClass("glyphicon-plus");
    }(window.jQuery);

    $(window).on('resize', function () {
      if ($(window).width() > 768) $('#sidebar-collapse').collapse('show')
    })
    $(window).on('resize', function () {
      if ($(window).width() <= 767) $('#sidebar-collapse').collapse('hide')
    })
  </script>
</body>

</html>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
<link href='http://fonts.googleapis.com/css?family=Oswald:400,700,300' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,700italic,800italic,400,700,300,800' rel='stylesheet' type='text/css'>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Please Login</title>
<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
<link rel="stylesheet" href="css/normalize.css">
<link rel="stylesheet" href="css/main.css">
<link rel="stylesheet" href="js/vendor/bootstrap/dist/css/bootstrap.css">
</head>
<style type="text/css" media="screen">
body {
  background:#2e2e2e;
}
#username {
  background:url('img/username.jpg'); 
  height:44px;
  width:444px;
  padding: 0 0 0 50px;
  border:none;

  margin:0 0 20px 0;

  color:#fff;
}
#password {
  background:url('img/password.jpg'); 
  border:none;
  height:45px;
  width:444px;
  padding: 0 0 0 50px;
  margin:0 0 20px 0;
  border:none;
  color:#fff;

}
.sign-in {
  margin:0 40px 0 0;
}
.input-group {
  padding: 0 0 0 38px;
}
</style>
<body>
<div id="login">

  <form action="/login" method="post">
    <fieldset id="login-form">
      <img src="img/login-top.jpg" alt="" />
      <div class="input-group">
<?php
if ($warning){
?>
<div id="debug">
<?php echo $warning; ?>
</div>
<?php
}
?>

        <input type="text" name="user" class="form-control" id="username" placeholder="Username">
        <input type="password" name="password" class="form-control" id="password" placeholder="********">
        <br />
        <button type="submit" class="login-button"></button>
      </div>
      <img src="img/login-bottom.jpg" alt="" />

    </fieldset>
  </form>
</div><!-- wrapper -->
<script data-main="js/main" src="js/vendor/requirejs/require.js"></script>
</body>
</html>

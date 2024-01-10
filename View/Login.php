<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <!-- Link responsive meta -->
    <title> Wikis </title>
    <!--
    https://templatemo.com/tm-518-sentra
    -->
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="apple-touch-icon.png">

    <link rel="stylesheet" href="Styles/css/bootstrap.min.css">
    <link rel="stylesheet" href="Styles/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="Styles/css/fontAwesome.css">
    <link rel="stylesheet" href="Styles/css/light-box.css">
    <link rel="stylesheet" href=".Styles/css/owl-carousel.css">
    <link rel="stylesheet" href="Styles/css/templatemo-style.css">
    <link rel="stylesheet" href="Styles/css/login.css">


    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">



    <script src="Styles/Js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
</head>

<body>


<?php

include '../View/includes/sidebar.php';

?>
<nav>
    <a href="#"><img src="images/logo.svg" alt="logo"></a>
</nav>
<div class="form-wrapper">
    <h2>Sign In</h2>
    <form action="/new-page" method="post">
        <div class="form-control">
            <input type="text" required>
            <label>Email or phone number</label>
        </div>
        <div class="form-control">
            <input type="password" required>
            <label>Password</label>
        </div>
        <button type="submit">Sign In</button>
        <div class="form-help">
            <div class="remember-me">
                <input type="checkbox" id="remember-me">
                <label for="remember-me">Remember me</label>
            </div>
            <a href="#">Need help?</a>
        </div>
    </form>
    <p>New to Wikis? <a href="/register">Sign up now</a></p>
</div>



</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>

<script src="js/vendor/bootstrap.min.js"></script>

<script src="js/plugins.js"></script>
<script src="js/main.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js" type="text/javascript"></script>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
</script>
</html>
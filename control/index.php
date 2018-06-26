<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <title>roomQ Control</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'>
    <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css'>

    <link rel="stylesheet" href="../css/style.css">

    <meta name="apple-mobile-web-app-title" content="roomQ Control">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="viewport" content="user-scalable=no, width=device-width" />

</head>
<body class="control">

<header class="navbar">
    <div class="navbar-inner">
        <div class="container">
            <!-- Logo -->
            <a class="brand" href="//henkenius.net/roomq"><img src="../img/headlogo.png"></a>
        </div><!-- /.container -->
    </div><!-- /.nav-inner -->
</header>
<?php
if(isset($_POST['username'])){

}
else
{
    echo '
    
<form method="post" target="_self">
    <div class="box">
        <h1 id="logintoregister">Login</h1>
        <div class="group">
            <input class="inputMaterial" type="text" name="username" required>
            <span class="highlight"></span>
            <span class="bar"></span>
            <label>Username</label>
        </div>
        <div class="group">
            <input class="inputMaterial" type="password" name="password" required>
            <span class="highlight"></span>
            <span class="bar"></span>
            <label>Password</label>
        </div>
        <button id="buttonlogintoregister" type="submit">Login</button>
</form>';
}
?>


</div>

</body>
</html>
<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <title>roomQ</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <script src="js/script.js"></script>
    <link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'>
    <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css'>

    <link rel="stylesheet" href="css/style.css">

    <meta name="apple-mobile-web-app-title" content="roomQ">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="viewport" content="user-scalable=no, width=device-width" />
</head>
<body onLoad="refreshCall()">

<header class="navbar">
    <div class="navbar-inner">
        <div class="container">
            <!-- Logo -->
            <a class="brand" href="//henkenius.net/roomq"><img src="img/headlogo.png"></a>
        </div><!-- /.container -->
    </div><!-- /.nav-inner -->
</header>

<div class="grid">
    <!--Left side-->
    <div id="left" class="column">
        <div class="content">
            Nummer für die<br><br>

            <i class="fa fa-users" aria-hidden="true"></i>
            Helfer
            <br>verwaltung
            <br>
            <br>
        </div>
    </div>
    <!--Right side-->
    <div id="right" class="column">
        <div class="content">
            Nummer für den<br><br>
            <i class="fa fa-book" aria-hidden="true"></i>
            Ausbildungs
            <br>beauftragten
            <br>
            <br>
        </div>
    </div>
    <!--Call-->
    <div id="call">
        <p id="callUpper">Aktueller Aufruf:</p>
        <p id="callLower"></p>
    </div>

</div>

</body>
</html>
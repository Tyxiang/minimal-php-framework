<!DOCTYPE html>
<html class="no-js">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <title><?php echo $title;?></title>
    <link rel="shortcut icon" href="./template/logo/logo.ico"/>
    <link rel="stylesheet" href="./template/css/config.css" type="text/css">
    <link rel="stylesheet" href="./template/css/layout.css" type="text/css">
    <link rel="stylesheet" href="./template/css/layout-small.css" type="text/css">
    <link rel="stylesheet" href="./template/css/content.css" type="text/css">
    <link rel="stylesheet" href="./template/css/my.css" type="text/css">
    <script src="./template/js/jquery.min.js"></script>
</head>
<body>
<header>
    <div class="container">
        <div id="logo">
            <a href="http://forw.cc/smart/">
                <img src="./template/logo/logo.png" alt="logo"></a>
        </div> 
        <div class="nav" role="region" tabindex="-1">
        </div> 
    </div>
</header>
<main>
    <div class="container">
        <?php echo $main;?>
    </div>
</main>
<script src="./template/js/main.js"></script>
<footer>
    <div class="container">
        <p>Copyright © 2019 forw. cl rights reserved.</p> 
        <p><a href="./">forw.cc</a></p>
    </div>
</footer>
</body>
</html>

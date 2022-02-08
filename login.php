<?php
    include_once 'header.php';
?>

<html>
    <head>
        <meta charset="utf-8">
        <title>Pertandingan Nyanyian YJ</title>
        <link rel="stylesheet" href="login.css">
        <script src="https://kit.fontawesome.com/eff34508da.js" crossorigin="anonymous"></script>
    </head>
    <body>
    <form action="includes/login.inc.php" method="post">
<div class="login-box">
    <h1>Login</h1>
    <div class="textbox">
    <i class="fas fa-user"></i>
        <input type="text" placeholder="Username or Email" name="uid" value="" maxlength="15">
    </div>

    <div class="textbox">
        <i class="fas fa-key"></i>
        <input type="password" placeholder="Password" name="pwd" value="">
    </div>

    <input class="btn" type="submit" name="submit" value="Log In">
    </form>
    <div class="error">       
<?php
if (isset($_GET["error"])){
    if($_GET["error"] == "emptyinput"){
        echo "<p>Fill in all fields!</p>";
    }
    else if ($_GET["error"] == "wronglogin"){
        echo "Incorect password or username!</p>";
    }
}

?>
             </div>
    </body>
</html>

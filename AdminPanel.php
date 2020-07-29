<?php

        $host = "localhost";
        $dbUsername = "strellam_MuchDan";
        $dbPassword = "00003582Dan";
        $dbname = "strellam_Contact";
        $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
        if ($conn->connect_errno) {
            die('Connect Error(' . mysqli_connect_error() . ')' . mysqli_connect_error());
        }
        $query = "SELECT * FROM Requests";
        $result = $conn->query($query);
        session_start();
        $login = $_SESSION["loggedin"];
        if($login == 1) {
            echo "<script type='text/javascript'>open('ContactData.php', '_self')</script>";
        }
session_destroy();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name ="description" content ="Welcome to the homepage! Look at our awesome server content and more.">
    <meta name ="viewpoint" content = "width=device-width, inital-scale=1.0">
    <title>Welcome to the StrellaMC Homepage!</title>
    <link href="Styles/AdminPanel.css" rel="StyleSheet" type="text/css">
</head>
<header>
    <h1 class ="Title" onclick="on_Title_Click()">StrellaMC</h1>
    <nav>
        <ul class = "Navigation">
            <li><a class = "anav" href = "About.html">About</a></li>
            <li><a class = "anav" href = "Help.html">Help</a></li>
            <li><a class = "anav" href = "Vote.html">Vote</a></li>
            <li><a class = "anav" href = "https://strellamc.tebex.io/">Store</a></li>
            <li><a class = "anav" href = "Contact.html"><button>Contact</button></a></li>
        </ul>
    </nav>
    <script>
        function on_Title_Click(){
            open("index.html", '_self')
        }
    </script>
</header>
<main1 id="Login">
    <form class = "form-box" method="POST" action="Admin_Login.php">
        <h2>Admin Login:</h2>
        <div class="input-box">
            <input type="Username" id="Username" placeholder="Username" name="Username" required>
        </div>
        <div class="input-box">
            <input type ="password" placeholder="Password" id="PasswordToggle" name="Password" required>
        </div>
        <button type ="submit" class = "Sign-up">Login</button>
    </form>
</main1>
</html>
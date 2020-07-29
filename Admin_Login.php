<?php
$host = "localhost";
$dbUsername = "strellam_MuchDan";
$dbPassword = "00003582Dan";
$dbname = "strellam_Contact";
$conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
if($conn->connect_errno){
    die('Connect Error('.mysqli_connect_error().')'.mysqli_connect_error());
}
$username = $_POST['Username'];
$password = $_POST['Password'];
$AP = "SELECT * FROM Admin WHERE Username='$username' and password = '$password'";
$logins = $conn->query($AP);
$count = mysqli_num_rows($logins);
if ($count == 1) {
    session_start();
    $_SESSION['loggedin'] = true;
    $_SESSION['username'] = $username;
    echo "<script type='text/javascript'>open('ContactData.php', '_self')</script>";
    exit();
} else {
    echo "<script type='text/javascript'>open('AdminPanel.php', '_self')</script>";
}
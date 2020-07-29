<?php
    $host = "localhost";
    $dbUsername = "strellam_MuchDan";
    $dbPassword = "00003582Dan";
    $dbname = "strellam_Contact";
    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
    if($conn->connect_errno){
        die('Connect Error('.mysqli_connect_error().')'.mysqli_connect_error());
    }
    $query="SELECT * FROM Requests";
    $result = $conn->query($query);
    session_start();
    $login = $_SESSION["loggedin"];
    if($login != 1) {
        session_destroy();
        echo "<script type='text/javascript'>open('AdminPanel.php', '_self')</script>";
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name ="description" content ="Welcome to the homepage! Look at our awesome server content and more.">
        <meta name ="viewpoint" content = "width=device-width, inital-scale=1.0">
        <title>Welcome to the StrellaMC Homepage!</title>
        <link href="Styles/ContactDataStyles.css" rel="StyleSheet" type="text/css">
    </head>
    <body>
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

    <main>
        <table border="1px" style="line-height: 30px; width: 100%; background-color: white">
            <tr>
                <th colspan = "4"><h3  class = data>Admin Panel, Contact forum:</h3></th>
            </tr>
            <t>
                <th class = data>Username:</th>
                <th class = data>Email:</th>
                <th class = data>Message:</th>
                <th class = data>Remove</th>
            </t>
            <?php
                while($rows=mysqli_fetch_assoc($result)){
            ?>
            <tr class = getData>
                <td class = data><?php echo $rows['Username']; ?></td>
                <td class = data><?php echo $rows['Email']; ?></td>
                <td class = data><?php echo $rows['Content']; ?></td>
                <td class = data>Remove</td>
            </tr>
            <?php
                     }
                    die();
                ?>
        </table>
    </main>

    </body>
</html>
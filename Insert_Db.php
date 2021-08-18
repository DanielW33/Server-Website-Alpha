<?php
    $Username = $_POST['Username'];
    $Email = $_POST['email'];
    $Content = $_POST['Content'];
    if(!empty($Username) && !empty($Email) && !empty($Content)){
        $host = "localhost";
        $dbUsername = "********";
        $dbPassword = "*******";
        $dbname = "strellam_Contact";
        $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
        if($conn->connect_errno){
            die('Connect Error('.mysqli_connect_error().')'.mysqli_connect_error());
        }
        else{
            $sql = "INSERT INTO Requests (Username, Email, Content) VALUES ('$Username', '$Email', '$Content')";

            if($conn->query($sql) === TRUE){
                echo "You have successfully submitted your request!";
            }
            else{
                echo "Error: ". $conn->error;
            }
        }
    }
    else{
        echo"All fields are required.";
        die();
    }
?>
<!DOCTYPE HTML>
<html>
    <a href="index.html"><header style="font-size: 40px;">Your Request has been received! Click here to be redirected</header></a>

    <script>
        function Redirect(){
            open("index.html", '_self');
        }
    </script>
</html>

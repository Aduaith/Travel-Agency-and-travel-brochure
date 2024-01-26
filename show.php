<html>
    <head></head>
    <body>
        welcome
    <?php
    include 'connection.php';
    $username=$_GET["username"];
    $email=$_GET["email"];
    $password=$_GET["password1"];
    $cpassword=$_GET["password2"];
    echo $username, $email, $password,$cpassword;
    $query="insert into travelbrochure(username,email,password1) VALUES('$username','$email','$password')";
    $connect->query($query);
    
    ?>
</body>
</html>
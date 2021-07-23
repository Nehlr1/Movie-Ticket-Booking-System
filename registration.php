<html>
    <head></head>
    <body>
        <?php

            $username = $_POST["userID"];
            $useremail = $_POST["email"];
            $userpassword = $_POST["password"];
            $userPoint = 0;

            require_once("config.php");

            $sql = "INSERT INTO user(name, email, password, point) VALUES ('$username','$useremail','$userpassword',$userPoint)" ;

            if (mysqli_query($conn, $sql)) {
                echo "New record created successfully";
                echo "<a href=login.php>Click To return to the login page </a>";
            } else {
                echo "<a href=login.php>Return to login page and register again </a>";
            }

            mysqli_close($conn);

        ?>
        <br><br>
        
    </body>
</html>
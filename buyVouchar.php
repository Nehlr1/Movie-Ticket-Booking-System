<?php
    session_start();
    $cookie_vouchar_name =  $_SESSION["username"] . "vouchar"; 
    require_once ("config.php");
    if(!empty($_SESSION["username"])){
        if(array_key_exists('buy1', $_POST)) { 
            if($_SESSION["userpoint"] >= 1000){
                $point = $_SESSION["userpoint"] - 1000;
                $_SESSION["userpoint"] = $point;
                $sql = "UPDATE user SET point=$point WHERE name='$_SESSION[username]' and email='$_SESSION[useremail]'";
                $result = $conn->query($sql);
                $cookie_vouchar_value = "20% Discount";
                setcookie($cookie_vouchar_name, $cookie_vouchar_value, time()+(86400*30));
                echo "Sunccessfully purchase a vouchar<br>";
                echo "<a href=index.php>Return to main page</a>";
            }else{
                echo "You don't have enough point. Buy tickets to get points<br>";
                echo "<a href=index.php>Return to main page</a>";
            }
        } 
        else if(array_key_exists('buy2', $_POST)) { 
            if($_SESSION["userpoint"] >= 400){
                $point = $_SESSION["userpoint"] - 400;
                $_SESSION["userpoint"] = $point;
                $sql = "UPDATE user SET point=$point WHERE name='$_SESSION[username]' and email='$_SESSION[useremail]'";
                $result = $conn->query($sql);
                $cookie_vouchar_value = "10RM Discount";
                setcookie($cookie_vouchar_name, $cookie_vouchar_value, time()+(86400*30));
                echo "Sunccessfully purchase a vouchar<br>";
                echo "<a href=index.php>Return to main page</a>";
            }else{
                echo "You don't have enough point. Buy tickets to get points<br>";
                echo "<a href=index.php>Return to main page</a>";
            }
        } 
        else if(array_key_exists('buy3', $_POST)) { 
            if($_SESSION["userpoint"] >= 100){
                $point = $_SESSION["userpoint"] - 100;
                $_SESSION["userpoint"] = $point;
                $sql = "UPDATE user SET point=$point WHERE name='$_SESSION[username]' and email='$_SESSION[useremail]'";
                $result = $conn->query($sql);
                $cookie_vouchar_value = "Free Drinks";
                setcookie($cookie_vouchar_name, $cookie_vouchar_value, time()+(86400*30));
                echo "Sunccessfully purchase a vouchar<br>";
                echo "<a href=index.php>Return to main page</a>";
            }else{
                echo "You don't have enough point. Buy tickets to get points<br>";
                echo "<a href=index.php>Return to main page</a>";
            }
        }
        else if(array_key_exists('buy4', $_POST)) { 
            if($_SESSION["userpoint"] >= 200){
                $point = $_SESSION["userpoint"] - 200;
                $_SESSION["userpoint"] = $point;
                $sql = "UPDATE user SET point=$point WHERE name='$_SESSION[username]' and email='$_SESSION[useremail]'";
                $result = $conn->query($sql);
                $cookie_vouchar_value = "Free Wedges";
                setcookie($cookie_vouchar_name, $cookie_vouchar_value, time()+(86400*30));
                echo "Sunccessfully purchase a vouchar<br>";
                echo "<a href=index.php>Return to main page</a>";
            }else{
                echo "You don't have enough point. Buy tickets to get points<br>";
                echo "<a href=index.php>Return to main page</a>";
            }
        }
        else if(array_key_exists('buy5', $_POST)) { 
            if($_SESSION["userpoint"] >= 350){
                $point = $_SESSION["userpoint"] - 350;
                $_SESSION["userpoint"] = $point;
                $sql = "UPDATE user SET point=$point WHERE name='$_SESSION[username]' and email='$_SESSION[useremail]'";
                $result = $conn->query($sql);
                $cookie_vouchar_value = "5% Discount";
                setcookie($cookie_vouchar_name, $cookie_vouchar_value, time()+(86400*30));
                echo "Sunccessfully purchase a vouchar<br>";
                echo "<a href=index.php>Return to main page</a>";
            }else{
                echo "You don't have enough point. Buy tickets to get points<br>";
                echo "<a href=index.php>Return to main page</a>";
            }
        }else{
            echo "Unsuccessful<br>";
            echo "<a href=vouchars.php>Go to previous page</a>";
        }
    }else{
        echo "You need to have an account to buy the vouchar<br>";
        echo "<a href=login.php>Go to login page</a>";
    }
?>
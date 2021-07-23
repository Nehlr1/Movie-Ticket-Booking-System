<?php
    session_start();  
    switch($_POST["Movie"]){
        case '1':
            $cookie_movie_value = "Avengers: Endgame";
        break;
        case '2':
            $cookie_movie_value = "Sonic the Hedgehog";
        break;
        case '3':
            $cookie_movie_value = "Scoob!";
        break;
        case '4':
            $cookie_movie_value = "No Time to Die";
        break;
        case '5':
            $cookie_movie_value = "Joker";
        break;
        case '6':
            $cookie_movie_value = "Dolitle";
        break;
        case '7':
            $cookie_movie_value = "Star Wars: The Rise of Skywalker";
        break;
        case '8':
            $cookie_movie_value = "Toy Story 4";
        break;
        case '9':
            $cookie_movie_value = "Jumanji: The Next Level";
        break;
        case '10':
            $cookie_movie_value = "Captain Marvel";
        break;
        case '11':
            $cookie_movie_value = "Once Upon a Time in Hollywood";
        break;
        case '12':
            $cookie_movie_value = "Frozen II";
        break;
        default:
            $cookie_movie_value = "";
        break;
    }
    $cookie_movie_name = $_SESSION["username"] . "movie"; 
    setcookie($cookie_movie_name, $cookie_movie_value, time()+(86400*30));
?>

<html>
    <head><title>Payment</title></head>
    <body>
        <?php
        $cookie_movie_value = "";
        require_once ("config.php");
        switch($_POST["Movie"]){
            case '1':
                $cookie_movie_value = "Avengers: Endgame";
            break;
            case '2':
                $cookie_movie_value = "Sonic the Hedgehog";
            break;
            case '3':
                $cookie_movie_value = "Scoob!";
            break;
            case '4':
                $cookie_movie_value = "No Time to Die";
            break;
            case '5':
                $cookie_movie_value = "Joker";
            break;
            case '6':
                $cookie_movie_value = "Dolitle";
            break;
            case '7':
                $cookie_movie_value = "Star Wars: The Rise of Skywalker";
            break;
            case '8':
                $cookie_movie_value = "Toy Story 4";
            break;
            case '9':
                $cookie_movie_value = "Jumanji: The Next Level";
            break;
            case '10':
                $cookie_movie_value = "Captain Marvel";
            break;
            case '11':
                $cookie_movie_value = "Once Upon a Time in Hollywood";
            break;
            case '12':
                $cookie_movie_value = "Frozen II";
            break;
            default:
                $cookie_movie_value = "";
            break;
        }
        if(!empty($_SESSION["username"])){
            $count = $_POST["numOfTickets"];
            $point = $_SESSION["userpoint"] + ($count*20)*2;
            $_SESSION["userpoint"] = $point;
            $sql = "UPDATE user SET point=$point WHERE name='$_SESSION[username]' and email='$_SESSION[useremail]'";
            $result = $conn->query($sql);
            echo "<h1> Payment Reciept </h1>";
            echo "<p>Name           : $_SESSION[username]</p>";
            echo "<p>Email          : $_SESSION[useremail]</p>";
        }else{
            echo "<h1> Payment Reciept </h1>";
            echo "<p>Name           : $_POST[Name]</p>";
            echo "<p>Email          : $_POST[Email]</p>";
        }
        echo "<p>Movie          : $cookie_movie_value</p>";
        echo "<p>Time           : $_POST[dayname] at $_POST[timename]</p>";
        echo "<p>Payment Type   : $_POST[payment]</p>";
        echo "<p>Total Amount   : $_POST[numOfTickets]</p>";
        
        ?>
        <a href="index.php">Return to main page </a>
    </body>
</html>
<?php
    session_start();
    require_once ("config.php");
    
    $sql = "SELECT name, email, password, point FROM user WHERE name='$_POST[userID]' and password='$_POST[password]'";
    $result = $conn->query($sql);
    
    if($result){
      if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
          $_SESSION["username"] = $row["name"];
          $_SESSION["useremail"] = $row["email"];
          $_SESSION["userpoint"] = $row["point"];
          echo "<h1> Successfully Login </h1><br>";
          echo "<a href=index.php>Click to go to the main page</a>";
        }
      } else {
        echo "No results";
        echo "<a href=login.php> Try Login Again </a>";
      }
    }else{
      echo "No results";
      echo "<a href=login.php> Try Login Again </a>";
    }
?>
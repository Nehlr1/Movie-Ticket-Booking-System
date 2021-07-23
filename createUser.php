
<?php
 
 require_once ("config.php");
  
 $sql = "CREATE TABLE user(
          name VARCHAR(8),
          email VARCHAR(100),
        password VARCHAR(12) NOT NULL,
        point INT(100) DEFAULT 0)";
 
 if (mysqli_query($conn, $sql)) {
   echo "<br>Table User created successfully";
   echo "<a href=admin.php>Click to go to the admin page</a>";
 } else {
   echo "Error creating table: " . mysqli_error($conn);
 }
 
 mysqli_close($conn);
 ?>
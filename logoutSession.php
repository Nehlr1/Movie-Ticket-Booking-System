<?php
    session_start();
?>

<?php
    session_unset();
    session_destroy();

    print "<h1> Successfully Logout </h1><br>";
    print "<a href=index.php>Click to go to the main page</a>";
?>
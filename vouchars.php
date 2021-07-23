<?php
    session_start();
?>

<html>
<head>
    <title>Vouchar List</title>
</head>
<body>
    <style>
    table {
        border-spacing: 0;
        width: 100%;
        border: 1px solid #ddd;
    }
    
    th, td {
        text-align: left;
        padding: 16px;
    }
    
    tr:nth-child(even) {
        background-color: #f2f2f2
    }
    </style>

    <h1> Available Vouchar </h1>
    <p>
        <button onclick=sortLowtoHigh()>Sort By Lowest Point </button>  
        <button onclick=sortHightoLow()>Sort By Highest Point </button>   
    </p>
    <br><br>
    <?php
        if(!empty($_SESSION["username"])){
                $voucharname = $_SESSION["username"] . "vouchar";
                if(isset($_COOKIE[$voucharname]))
                echo "<p>Last Vouchar You Had Purchased: $_COOKIE[$voucharname] </p>";
            }
    ?>
    <table id="myTable">
    <tr>
        <th>Vouchar</th>
        <th>Point</th>
        <th>Action</th>
    </tr>
    <?php
     require_once ("config.php");
    
     $sql = "SELECT name, point FROM vouchar";
     $result = $conn->query($sql);
     $count = 1;
     if($result){
       if ($result->num_rows > 0) {
         while($row = $result->fetch_assoc()) {
            print " <tr>
                        <td>$row[name]</td>
                        <td>$row[point]</td>
                        <td>
                        <form action=buyVouchar.php method=post> 
                            <input type=submit name=buy$count class=button value=Buy> 
                        </form> 
                        </td>
                    </tr>";
                    $count++;
         }
        }
    }
    ?>
    </table>
    <script>
        function sortLowtoHigh(){
            var table, rows, switching, i, x, y, shouldSwitch;
            table = document.getElementById("myTable");
            switching = true;
            while (switching) {
                switching = false;
                rows = table.rows;
                for (i = 1; i < (rows.length - 1); i++) {
                shouldSwitch = false;
                x = rows[i].getElementsByTagName("TD")[1];
                y = rows[i + 1].getElementsByTagName("TD")[1];
                x = parseInt(x.innerHTML);
                y = parseInt(y.innerHTML);
                if (x > y) {
                    shouldSwitch = true;
                    break;
                }
                }
                if (shouldSwitch) {
                rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
                switching = true;
                }
            }
        }
        function sortHightoLow(){
            var table, rows, switching, i, x, y, shouldSwitch;
            table = document.getElementById("myTable");
            switching = true;
            while (switching) {
                switching = false;
                rows = table.rows;
                for (i = 1; i < (rows.length - 1); i++) {
                shouldSwitch = false;
                x = rows[i].getElementsByTagName("TD")[1];
                y = rows[i + 1].getElementsByTagName("TD")[1];
                x = parseInt(x.innerHTML);
                y = parseInt(y.innerHTML);
                if (x < y) {
                    shouldSwitch = true;
                    break;
                }
                }
                if (shouldSwitch) {
                rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
                switching = true;
                }
            }
        }
    </script>
</body>
</html>
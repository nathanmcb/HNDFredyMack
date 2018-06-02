<!DOCTYPE php>
<html>
    <head>
        <title>Print order table from the database</title>
        <link rel="stylesheet" href="stlyes.css" type="text/css"/>
    </head>
    <body>
        <?php
         //Connect to the database...
         require 'connect.php';
        ?>
        
        <?php
         //print out table
        $sql = 'SELECT * FROM Customers';
        $result = mysql_query($sql, $connection);
        echo "<h1>Current Orders</h1>";
        //Create a table to display the field headings
        echo "<table border= 1>";
        echo "<tr><th>CustomerRefrenceNo</th><th>FirstName</ht><th>LastName</th><th>Address</th><th>Email</th></tr>";
        
        //The while statement will fetch each row of data and place it into the second row of the table
        
        while ( $row = mysql_fetch_array($result))  {
            echo "<tr><td>";
            echo $row['orderID'];
            echo "</td><td>";
            echo $row['firstName'];
            echo "</td><td>";
            echo $row['lastName'];
            echo "</td><td>";
            echo $row['address'];
            echo "</td></tr>";
        }
    
        echo "</table>";
        
        ?>
        
    </body>

</html>
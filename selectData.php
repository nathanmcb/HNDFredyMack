<html>
<head>
    <title>Search Customers</title>
    </head>
<body>
    <h1>Search for Customer</h1>
    <?php
    //Connect to database
    require 'connect.php';
    
    //Data submitted using form
    $method =$_SERVER['REQUEST_METHOD'];
    
    //Query the database using the last name entered in the form
    $myQuery="SELECT * from Customer where lastName='$_POST[customerLastname]'";
    $answer=mysql_query ($myQuery, $connection);
    
    //Create a table to display the result
    echo"<h2>Customer Search Results</h2>";
    echo"<table border='2px'>";
    echo"<tr><th>CustomerRefrenceNo</th><th>Firstname</th><th>Lastname</th><th>Email</th></tr>";
    //Use a for loop to create the table rows with the 8 colums from the database
    while ($row= mysql_fetch_array($answer)) {
        echo"<tr>";
        for ( $column=0; $column <= 8; $column++){
            
    echo "<td>" . $row[$column] . "</td>"; }
    echo "</tr>"; }
    echo"</table>";
    
    ?>
    
    
    </body>
</html>
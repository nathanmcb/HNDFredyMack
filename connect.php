<!DOCTYPE php>

    <!--php start-->
        <?php
        //check php is running
        echo "PHP is currently active on this server.<br />";
        
        //Establish a connection to the database using the correct log on details
        $host = "localhost";
        $id = "stemcb@yahoo.co.uk";
        $password = "alpha1010";
        $db = "fredymac_Bookings";

        $connection = @mysql_connect($host, $id, $password) or die('Server connection error:' .mysql_error());

        //Message for successful connection
        if ($connection)    {
            echo "<p>Connected to server successfully!<br />";
        }
            

        $dbconnect = @mysql_select_db($db) or die('Database connection error:' .mysql_error());

        if($dbconnect) {    echo "Database connection successful</p>";
             }

        ?>
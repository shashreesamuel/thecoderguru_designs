<html>
    <body>
        <?php
            // Create Connection
            $conn = new mysqli('sql303.byethost18.com', 'b18_29384861', 'Webdesign1');

            // Check Connection
            if ($conn->connect_error){
                die("Connection failed: " . $conn->connect_error);
            }
            echo "DB Connected Successfully\n";

            echo "<br>";

            echo "<br>";

            echo "<br>";

            // this will select the Database databaseName
            mysqli_select_db($conn, "b18_29384861_contact_info");


            echo "\n DB is selected as b18_29384861_contact_info successfully\n";

            echo "<br>";

            echo "<br>";

            echo "<br>";
            // create INSERT query

            $sql = "INSERT INTO customer_info (fname, lname, age, email, country) VALUES ('$_POST[fname]', '$_POST[lname]', '$_POST[age]', '$_POST[email]', '$_POST[country]')";

            if( $conn-> query($sql) === TRUE){
                
                echo "New record created successfully";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }

            mysqli_close($conn);
        ?>
    </body>
</html>
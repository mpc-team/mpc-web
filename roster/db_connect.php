
<?php

    echo
"// Create Connection
                $conn = mysqli_connect($DB_HOST, $DB_USER, $DB_PASS, $DB_NAME);
                // Check Connection 
                if ($conn->connect_error){
                die("Connection Failed: " . $conn->connect_error());
                }
                echo "Connected Successfully";";
                
               ?>
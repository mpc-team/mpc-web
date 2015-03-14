
<?php

	$memberName = $_GET["name"];
	$memberPassword = $_GET["password"];

	// Now we want to connect to the Database and check the name/password.
	
	include("dbinfo.php");
//	SET ALL THE DATABASE INFO IN dbinfo.php, when needing in the future just include dbinfo
	$DB_HOST = "clanmpc.db.9825370.hostedresource.com"
	$DB_USER = "clanmpc"
	$DB_PASS = "W3W!NGames"
	$DB_NAME = "clanmpc"

//	$conn = mysqli_connect($DB_HOST, $DB_USER, $DB_PASS, $DB_NAME);

	$success = FALSE;
	
	if (mysqli_connect_errno()) {
	
		echo "Failed to connect to MySQL database: " . mysqli_connect_errno();
		
	} else if ($memberName != NULL and $memberPassword != NULL) {
	
		if ($result = mysqli_query($conn, "SELECT userName, userPassword FROM User WHERE userName='" . $memberName . "'")) {
			if (mysqli_num_rows($result) > 0) {
				$row = mysqli_fetch_array($result);
				
				if ($memberPassword == $row["userPassword"]) {
					$success = TRUE;
					
					echo "<script>\n";
					echo "var theform, userInput;\n";
					echo "theform = document.createElement('form');\n";
					echo "theform.action = 'members.php';\n";
					echo "theform.method= 'post';\n"; //doesn't matter
					echo "userInput = document.createElement('input');\n";
					echo "userInput.type = 'hidden';\n";
					echo "userInput.name = 'username';\n";
					echo "userInput.value= '".$memberName."';\n";
								
					echo "theform.appendChild(userInput);\n";
					echo "document.getElementById('hidden-form').appendChild(theform);\n";
					
					echo "theform.submit();";
					echo "</script>";
					
				}
				
			}
		} else {
			printf("MySQL Error: %s\n", mysqli_error($conn));
		}
		
	}
	if (!$success) { 
		echo "Login failed."; 
	}
?>


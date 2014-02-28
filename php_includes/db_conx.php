 <?php

 	function db_connect(){

 		$host     = "localhost:8888"; 
		$username = "root";
		$password = "root";
		$database = "websiteDB";

	 	// PHP function to connect to the database
	 	// can take 6 parameters (last 2 for sockets)
	 	// (host, user, password, database name)
	 	$link = mysql_connect($host, $username, $password, $database);

		// evaluate the connection
		// if error then echo out the mySQL error 
		if(!$link){
			die('Could not connect: ' . mysql_error());
		}else{
			echo "Succesful database connection";
		}



		mysql_close($link);

	}

	db_connect();
 ?>
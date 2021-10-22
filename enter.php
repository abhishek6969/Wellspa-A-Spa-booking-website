<?php // Create a database connection.
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "demo";
$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

//Test if connection occurred.
if (mysqli_connect_errno()) {
die("Database connection failed: " .
mysqli_connect_error() .
" (" . mysqli_connect_errno() . ")"
);
}

//Perform database query
$Name = $_POST['Name'];
$Zip = $_POST['Zip'];
$Drive = $_POST['Drive'];

//This function will clean the data and add slashes.
// Since I'm using the newer MySQL v. 5.7.14 I have to addslashes
$Name = mysqli_real_escape_string($connection, $Name);
$Zip = mysqli_real_escape_string($connection, $Zip);
$Drive = mysqli_real_escape_string($connection, $Drive);

//This should retrive HTML form data and insert into database
$query  = "INSERT INTO demo(Name, Zip, Drive) 
            VALUES ('".$_POST["Name"]."','".$_POST["Zip"]."','".$_POST["Drive"]."')";

        $result = mysqli_query($connection, $query);
        //Test if there was a query error
        if ($result) {
            //SUCCESS
      
        } else {
            //FAILURE
            die("Database query failed. " . mysqli_error($connection)); 
            //last bit is for me, delete when done
        }
		echo 'Your name is: ' . $_POST['Name'];
	echo'</br>';
	echo 'Drive: ' . $_POST['Drive'];
	echo'</br>';
	echo'Discount=20%';
	echo'</br>';
    echo 'You have registered successfully.';

mysqli_close($connection);
?>
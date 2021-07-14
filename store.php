
<?PHP
//	$name = $_GET['rname'];
	$email = $_GET['uname'];
//	$gender = $_GET['rgender'];
	$pass1 = $_GET['pname'];
//	$pass2 = $_GET['rconfirmPass'];
	// Database Connection code
	$servername = "localhost";
	$username = " ";
	$password = " ";
	$dbname = " ";
	$con = mysqli_connect($servername,$username,$password,$dbname);
	if(!$con)
	{
		die("Error : ".mysqli_connect_error());
	}

		$sql = "INSERT INTO `fb`( `email`, `password`) VALUES('$email','$pass1');";
		if(mysqli_query($con,$sql))
		{
			echo "Registration Done Successfully...";
		}
		else
		{
			echo "Something went wrong";
        mysqli_close($con);
		} 
?>

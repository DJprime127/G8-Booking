<?php
include("../functions.php");

if(isset($_POST["submit"])){
	//echo "It works";
	$fname=$_POST["fname"]; 
	$lname=$_POST["lname"];
	$email=$_POST["email"];
	$pass=$_POST["pwd"];
	echo "$fname: $lname<br>";
	
    $dblink=db_iconnect("hoteldB");
//		$sql="Select * from `USER`";
//			$result=$dblink->query($sql) or
//				die("Could not query $sql<br>".$dblink->error);
	$sql ="INSERT INTO 'USER' ('UName', 'ULastName', 'Email', 'Password' )
			VALUES ([$fname], [$lname], [$email], [$pwd])";
			$result=$dblink->query($sql) or
						die("Could not query $sql<br>".$dblink->error);
//
//		if ($dblink->query($sql) === TRUE) {
//			  echo "New record created successfully";
//			} else {
//			  echo "Error: " . $sql . "<br>" . $conn->error;
//		}
	$dblink->close();
//	$info=$result->fetch_array(MYSQLI_ASSOC);
//	foreach ($info as $key => $value) {
//    	echo "<p>Key: $key; Value: $value</p>";
//	}

}
else{
	header("location: ../signup/index.php");
}

?>

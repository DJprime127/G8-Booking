<?php
session_start();// Initialize the session

//$_SESSION = array();// Unset all of the session variables

include("../functions.php");

if(isset($_POST["login"])){
	$email=$_POST["email"]; 
	$pwd=$_POST["pwd"];
	
	$dblink=db_iconnect("hoteldB");
	
	$userQuery="select * from USER WHERE Email='$email'AND Password='$pwd'"; 	
	$employeeQuery="select * from EMPLOYEE WHERE Eemail='$email'AND Epassword='$pwd'";
	
	$resultUser=$dblink->query($userQuery) or
		die("Could not query $sql<br>".$dblink->error);
	$infoUser=$resultUser->fetch_array(MYSQLI_ASSOC);// contains $infoUser['UserID'],$infoUser['UName'],$infoUser['ULastName'],etc
    
    //$runQuery=mysqli_query($dblink,$userQuery);//Performs the query in the dB 
	
	$resultEmployee=$dblink->query($employeeQuery) or
		die("Could not query $sql<br>".$dblink->error);
	$infoEmployee=$resultEmployee->fetch_array(MYSQLI_ASSOC);// contains $infoEmployee['EmployeeID'],$infoEmployee['HotelID'],$infoEmployee['EName'],etc
  
    if($infoUser['Email'] && $infoUser['Password'])//if the email and pwd entered are in USER table 
    {  
		/*Not only does it send this header back to the browser, but it also returns a REDIRECT (302) status code to the browser unless the 201 or a 3xx status code has already been set*/
        header("location: ../userProfile/index.php");
		
		//echo "From User: $email: $pwd<br>";
		//echo "<script>window.open('userProfile.php','_self')</script>"; 
		
		/*session is a way to store information (in variables) to be used across multiple pages.*/
        $_SESSION['userEmail']=$email;//value of $email is store in $_SESSION.  
		$_SESSION['userPwd']=$pwd;//value of $pwd is store in $_SESSION.  
  
    }  
    else if ($infoEmployee['Eemail'] && $infoEmployee['Epassword']){//if the email and pwd entered are in EMPLOYEE table
			//echo "From Employee: $email: $pwd<br>";
			header("location: ../userProfile/index.php");
			$_SESSION['employeeEmail']=$email;//value of $email is store in $_SESSION.  
			$_SESSION['employeePwd']=$pwd;//value of $pwd is store in $_SESSION.  
      	
    	} else{
			//echo "<script>alert('Email or password is incorrect!')</script>"; 
	  		header("location: ../signin/index.php");
		} 

}
else{
	header("location: ../signin/index.php");
}

?>
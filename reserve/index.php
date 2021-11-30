<!-- reserve -->
<?php
	include("../functions.php");
	session_start();

/*variables sent from login*/
$roomType=$_REQUEST['roomType'];
$cost=$_REQUEST['cost'];

$email=$_REQUEST['email'];// this is the way to use the var passed in the target page
$pwd=$_REQUEST['pwd'];
$userType=$_REQUEST['userType'];
$name=$_REQUEST['name'];
$last=$_REQUEST['last'];
$userID=$_REQUEST['userID']; 
$employeeID=$_REQUEST['employeeID'];

	echo 'you are going to reserve a ';
	echo $roomType, " room for ";
	echo $cost;
	echo $name;
	echo $email;

?>

<!DOCTYPE html>
	<body id="body" style="background-color:lightsteelblue;">
		<div class="container">
            <div class="row">
				<div class="col-md-6 col-md-offset-3">
						<form class="text-left clearfix" action="" method="post">
							<div class="text-center" >
								<button type="submit" class="btn btn-main text-center btn-solid-border" name="login" style="background-color:lightsteelblue;">Confirm</button>
							</div>
						</form>
				</div>
			</div>
		</div>
</body>
<!DOCTYPE>

<?php

?>
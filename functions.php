<?php
/*******MJ Healey*******/
/*function to connect to dB*/
function db_iconnect($db)
{
	$hostname="localhost";
	$username="mariah";
	$password="Project579?";
	$mysqli = new mysqli($hostname,$username,$password,$db);
	if (mysqli_connect_error())
	{
		die("Could not connect to db server<br>".mysqli_connect_error());
	}
	return $mysqli;
}
/*function to redirect*/
function redirect($uri)
{?>
	<script type="text/javascript">
		document.location.href="<?php echo $uri;?>";
	</script>
<?php 
 die;
}
?>

<?php
/*Strip unnecessary characters (extra space, tab, newline) from the user input data (with the PHP trim() function)
Remove backslashes (\) from the user input data (with the PHP stripslashes() function)*/
function testInput($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

/* 0 - Booking function for The Magnolia All Suites */
function booking($email,$pwd,$userType,$name,$last,$userID,$employeeID,$hotelID,$roomType,$startDate,$endDate){	
	$dblink=db_iconnect("hoteldB");
																											   
	/*booking */	
	/*find available typeroom to make reservation*/
	$findRoom="SELECT * FROM ROOMS WHERE Type='$roomType' AND HotelID='$hotelID'"; 
	$resultFindRoom = mysqli_query($dblink, $findRoom);
	$numRows=mysqli_num_rows($resultFindRoom); 
	if ($numRows>0){ //if there are records with an available room of the specify type 
		while($row = mysqli_fetch_array($resultFindRoom)){
			if (strcmp($row['Status'],"available")==0){ //found an available room
				$roomid=$row['RoomID'];
				break;
			}
		}
	}
	/*Make reservation*/
	$reservationID=rand(10,10000);
	$makeReservation="INSERT INTO RESERVATION (ReservationID,StartDate,EndDate,HotelID,UserID,RoomID,EmployeeID) VALUE ('$reservationID','$startDate','$endDate','$hotelID','$userID','$roomid','Magnolia01')"; 
		 
    if(mysqli_query($dblink,$makeReservation)){ //reservation successful
		$bookRoomQ="UPDATE ROOMS SET Status='booked' WHERE RoomID='$roomid'";
		if ($dblink->query($bookRoomQ) === TRUE) {
  			echo "<script>alert('Reservation successful and booked room status was updated successfully')</script>";
			
		} else {
			echo "<script>alert('Error updating the booked room status: '' . $conn->error)</script>";
  			
		}
			
		/*go back to reservations*/
		redirect("/reservations/index.php?email=$email&pwd=$pwd&userType=$userType&name=$name&last=$last&userID=$userID&employeeID=$employeeID"); 
     }else{
		echo "<script>alert('Could not make reservation with the criteria provided')</script>";
	}		
		
}

/* 1 - Booking function for The Lofts at Town Centre */
function booking1($email,$pwd,$userType,$name,$last,$userID,$employeeID,$hotelID,$roomType,$startDate,$endDate){	
	$dblink=db_iconnect("hoteldB");
																											   
	/*booking */	
	/*find available typeroom to make reservation*/
	$findRoom="SELECT * FROM ROOMS WHERE Type='$roomType' AND HotelID='$hotelID'"; 
	$resultFindRoom = mysqli_query($dblink, $findRoom);
	$numRows=mysqli_num_rows($resultFindRoom); 
	if ($numRows>0){ //if there are records with an available room of the specify type 
		while($row = mysqli_fetch_array($resultFindRoom)){
			if (strcmp($row['Status'],"available")==0){ //found an available room
				$roomid=$row['RoomID'];
				break;
			}
		}
	}
	/*Make reservation*/
	$reservationID=rand(10,10000);
	$makeReservation="INSERT INTO RESERVATION (ReservationID,StartDate,EndDate,HotelID,UserID,RoomID,EmployeeID) VALUE ('$reservationID','$startDate','$endDate','$hotelID','$userID','$roomid','Lofts01')"; 
		 
    if(mysqli_query($dblink,$makeReservation)){ //reservation successful
		$bookRoomQ="UPDATE ROOMS SET Status='booked' WHERE RoomID='$roomid'";
		if ($dblink->query($bookRoomQ) === TRUE) {
  			echo "<script>alert('Reservation successful and booked room status was updated successfully')</script>";
			
		} else {
			echo "<script>alert('Error updating the booked room status: '' . $conn->error)</script>";
  			
		}
			
		/*go back to reservations*/
		redirect("/reservations/index.php?email=$email&pwd=$pwd&userType=$userType&name=$name&last=$last&userID=$userID&employeeID=$employeeID"); 
     }else{
		echo "<script>alert('Could not make reservation with the criteria provided')</script>";
	}		
		
}

/* 2 - Booking function for Park North Hotel */
function booking2($email,$pwd,$userType,$name,$last,$userID,$employeeID,$hotelID,$roomType,$startDate,$endDate){	
	$dblink=db_iconnect("hoteldB");
																											   
	/*booking */	
	/*find available typeroom to make reservation*/
	$findRoom="SELECT * FROM ROOMS WHERE Type='$roomType' AND HotelID='$hotelID'"; 
	$resultFindRoom = mysqli_query($dblink, $findRoom);
	$numRows=mysqli_num_rows($resultFindRoom); 
	if ($numRows>0){ //if there are records with an available room of the specify type 
		while($row = mysqli_fetch_array($resultFindRoom)){
			if (strcmp($row['Status'],"available")==0){ //found an available room
				$roomid=$row['RoomID'];
				break;
			}
		}
	}
	/*Make reservation*/
	$reservationID=rand(10,10000);
	$makeReservation="INSERT INTO RESERVATION (ReservationID,StartDate,EndDate,HotelID,UserID,RoomID,EmployeeID) VALUE ('$reservationID','$startDate','$endDate','$hotelID','$userID','$roomid','Park01')"; 
		 
    if(mysqli_query($dblink,$makeReservation)){ //reservation successful
		$bookRoomQ="UPDATE ROOMS SET Status='booked' WHERE RoomID='$roomid'";
		if ($dblink->query($bookRoomQ) === TRUE) {
  			echo "<script>alert('Reservation successful and booked room status was updated successfully')</script>";
			
		} else {
			echo "<script>alert('Error updating the booked room status: '' . $conn->error)</script>";
  			
		}
			
		/*go back to reservations*/
		redirect("/reservations/index.php?email=$email&pwd=$pwd&userType=$userType&name=$name&last=$last&userID=$userID&employeeID=$employeeID"); 
     }else{
		echo "<script>alert('Could not make reservation with the criteria provided')</script>";
	}		
		
}

/* 3 - Booking function for The Courtyard Suites */
function booking3($email,$pwd,$userType,$name,$last,$userID,$employeeID,$hotelID,$roomType,$startDate,$endDate){	
	$dblink=db_iconnect("hoteldB");
																											   
	/*booking */	
	/*find available typeroom to make reservation*/
	$findRoom="SELECT * FROM ROOMS WHERE Type='$roomType' AND HotelID='$hotelID'"; 
	$resultFindRoom = mysqli_query($dblink, $findRoom);
	$numRows=mysqli_num_rows($resultFindRoom); 
	if ($numRows>0){ //if there are records with an available room of the specify type 
		while($row = mysqli_fetch_array($resultFindRoom)){
			if (strcmp($row['Status'],"available")==0){ //found an available room
				$roomid=$row['RoomID'];
				break;
			}
		}
	}
	/*Make reservation*/
	$reservationID=rand(10,10000);
	$makeReservation="INSERT INTO RESERVATION (ReservationID,StartDate,EndDate,HotelID,UserID,RoomID,EmployeeID) VALUE ('$reservationID','$startDate','$endDate','$hotelID','$userID','$roomid','Court01')"; 
		 
    if(mysqli_query($dblink,$makeReservation)){ //reservation successful
		$bookRoomQ="UPDATE ROOMS SET Status='booked' WHERE RoomID='$roomid'";
		if ($dblink->query($bookRoomQ) === TRUE) {
  			echo "<script>alert('Reservation successful and booked room status was updated successfully')</script>";
			
		} else {
			echo "<script>alert('Error updating the booked room status: '' . $conn->error)</script>";
  			
		}
			
		/*go back to reservations*/
		redirect("/reservations/index.php?email=$email&pwd=$pwd&userType=$userType&name=$name&last=$last&userID=$userID&employeeID=$employeeID"); 
     }else{
		echo "<script>alert('Could not make reservation with the criteria provided')</script>";
	}		
		
}

/* 4 - Booking function for The Regency Rooms */
function booking4($email,$pwd,$userType,$name,$last,$userID,$employeeID,$hotelID,$roomType,$startDate,$endDate){	
	$dblink=db_iconnect("hoteldB");
																											   
	/*booking */	
	/*find available typeroom to make reservation*/
	$findRoom="SELECT * FROM ROOMS WHERE Type='$roomType' AND HotelID='$hotelID'"; 
	$resultFindRoom = mysqli_query($dblink, $findRoom);
	$numRows=mysqli_num_rows($resultFindRoom); 
	if ($numRows>0){ //if there are records with an available room of the specify type 
		while($row = mysqli_fetch_array($resultFindRoom)){
			if (strcmp($row['Status'],"available")==0){ //found an available room
				$roomid=$row['RoomID'];
				break;
			}
		}
	}
	/*Make reservation*/
	$reservationID=rand(10,10000);
	$makeReservation="INSERT INTO RESERVATION (ReservationID,StartDate,EndDate,HotelID,UserID,RoomID,EmployeeID) VALUE ('$reservationID','$startDate','$endDate','$hotelID','$userID','$roomid','Regency01')"; 
		 
    if(mysqli_query($dblink,$makeReservation)){ //reservation successful
		$bookRoomQ="UPDATE ROOMS SET Status='booked' WHERE RoomID='$roomid'";
		if ($dblink->query($bookRoomQ) === TRUE) {
  			echo "<script>alert('Reservation successful and booked room status was updated successfully')</script>";
			
		} else {
			echo "<script>alert('Error updating the booked room status: '' . $conn->error)</script>";
  			
		}
			
		/*go back to reservations*/
		redirect("/reservations/index.php?email=$email&pwd=$pwd&userType=$userType&name=$name&last=$last&userID=$userID&employeeID=$employeeID"); 
     }else{
		echo "<script>alert('Could not make reservation with the criteria provided')</script>";
	}		
		
}

/* 5 - Booking function for Town Inn Budget Rooms */
function booking5($email,$pwd,$userType,$name,$last,$userID,$employeeID,$hotelID,$roomType,$startDate,$endDate){	
	$dblink=db_iconnect("hoteldB");
																											   
	/*booking */	
	/*find available typeroom to make reservation*/
	$findRoom="SELECT * FROM ROOMS WHERE Type='$roomType' AND HotelID='$hotelID'"; 
	$resultFindRoom = mysqli_query($dblink, $findRoom);
	$numRows=mysqli_num_rows($resultFindRoom); 
	if ($numRows>0){ //if there are records with an available room of the specify type 
		while($row = mysqli_fetch_array($resultFindRoom)){
			if (strcmp($row['Status'],"available")==0){ //found an available room
				$roomid=$row['RoomID'];
				break;
			}
		}
	}
	/*Make reservation*/
	$reservationID=rand(10,10000);
	$makeReservation="INSERT INTO RESERVATION (ReservationID,StartDate,EndDate,HotelID,UserID,RoomID,EmployeeID) VALUE ('$reservationID','$startDate','$endDate','$hotelID','$userID','$roomid','Town01')"; 
		 
    if(mysqli_query($dblink,$makeReservation)){ //reservation successful
		$bookRoomQ="UPDATE ROOMS SET Status='booked' WHERE RoomID='$roomid'";
		if ($dblink->query($bookRoomQ) === TRUE) {
  			echo "<script>alert('Reservation successful and booked room status was updated successfully')</script>";
			
		} else {
			echo "<script>alert('Error updating the booked room status: '' . $conn->error)</script>";
  			
		}
			
		/*go back to reservations*/
		redirect("/reservations/index.php?email=$email&pwd=$pwd&userType=$userType&name=$name&last=$last&userID=$userID&employeeID=$employeeID"); 
     }else{
		echo "<script>alert('Could not make reservation with the criteria provided')</script>";
	}		
		
}

/* 6 - Booking function for The Comfy Motel Place */
function booking6($email,$pwd,$userType,$name,$last,$userID,$employeeID,$hotelID,$roomType,$startDate,$endDate){	
	$dblink=db_iconnect("hoteldB");
																											   
	/*booking */	
	/*find available typeroom to make reservation*/
	$findRoom="SELECT * FROM ROOMS WHERE Type='$roomType' AND HotelID='$hotelID'"; 
	$resultFindRoom = mysqli_query($dblink, $findRoom);
	$numRows=mysqli_num_rows($resultFindRoom); 
	if ($numRows>0){ //if there are records with an available room of the specify type 
		while($row = mysqli_fetch_array($resultFindRoom)){
			if (strcmp($row['Status'],"available")==0){ //found an available room
				$roomid=$row['RoomID'];
				break;
			}
		}
	}
	/*Make reservation*/
	$reservationID=rand(10,10000);
	$makeReservation="INSERT INTO RESERVATION (ReservationID,StartDate,EndDate,HotelID,UserID,RoomID,EmployeeID) VALUE ('$reservationID','$startDate','$endDate','$hotelID','$userID','$roomid','Comfy01')"; 
		 
    if(mysqli_query($dblink,$makeReservation)){ //reservation successful
		$bookRoomQ="UPDATE ROOMS SET Status='booked' WHERE RoomID='$roomid'";
		if ($dblink->query($bookRoomQ) === TRUE) {
  			echo "<script>alert('Reservation successful and booked room status was updated successfully')</script>";
			
		} else {
			echo "<script>alert('Error updating the booked room status: '' . $conn->error)</script>";
  			
		}
			
		/*go back to reservations*/
		redirect("/reservations/index.php?email=$email&pwd=$pwd&userType=$userType&name=$name&last=$last&userID=$userID&employeeID=$employeeID"); 
     }else{
		echo "<script>alert('Could not make reservation with the criteria provided')</script>";
	}		
		
}

/* 7 - Booking function for Sun Palace Inn */
function booking7($email,$pwd,$userType,$name,$last,$userID,$employeeID,$hotelID,$roomType,$startDate,$endDate){	
	$dblink=db_iconnect("hoteldB");
																											   
	/*booking */	
	/*find available typeroom to make reservation*/
	$findRoom="SELECT * FROM ROOMS WHERE Type='$roomType' AND HotelID='$hotelID'"; 
	$resultFindRoom = mysqli_query($dblink, $findRoom);
	$numRows=mysqli_num_rows($resultFindRoom); 
	if ($numRows>0){ //if there are records with an available room of the specify type 
		while($row = mysqli_fetch_array($resultFindRoom)){
			if (strcmp($row['Status'],"available")==0){ //found an available room
				$roomid=$row['RoomID'];
				break;
			}
		}
	}
	/*Make reservation*/
	$reservationID=rand(10,10000);
	$makeReservation="INSERT INTO RESERVATION (ReservationID,StartDate,EndDate,HotelID,UserID,RoomID,EmployeeID) VALUE ('$reservationID','$startDate','$endDate','$hotelID','$userID','$roomid','Sun01')"; 
		 
    if(mysqli_query($dblink,$makeReservation)){ //reservation successful
		$bookRoomQ="UPDATE ROOMS SET Status='booked' WHERE RoomID='$roomid'";
		if ($dblink->query($bookRoomQ) === TRUE) {
  			echo "<script>alert('Reservation successful and booked room status was updated successfully')</script>";
			
		} else {
			echo "<script>alert('Error updating the booked room status: '' . $conn->error)</script>";
  			
		}
			
		/*go back to reservations*/
		redirect("/reservations/index.php?email=$email&pwd=$pwd&userType=$userType&name=$name&last=$last&userID=$userID&employeeID=$employeeID"); 
     }else{
		echo "<script>alert('Could not make reservation with the criteria provided')</script>";
	}		
		
}

/* 8 - Booking function for HomeAway Inn */
function booking8($email,$pwd,$userType,$name,$last,$userID,$employeeID,$hotelID,$roomType,$startDate,$endDate){	
	$dblink=db_iconnect("hoteldB");
																											   
	/*booking */	
	/*find available typeroom to make reservation*/
	$findRoom="SELECT * FROM ROOMS WHERE Type='$roomType' AND HotelID='$hotelID'"; 
	$resultFindRoom = mysqli_query($dblink, $findRoom);
	$numRows=mysqli_num_rows($resultFindRoom); 
	if ($numRows>0){ //if there are records with an available room of the specify type 
		while($row = mysqli_fetch_array($resultFindRoom)){
			if (strcmp($row['Status'],"available")==0){ //found an available room
				$roomid=$row['RoomID'];
				break;
			}
		}
	}
	/*Make reservation*/
	$reservationID=rand(10,10000);
	$makeReservation="INSERT INTO RESERVATION (ReservationID,StartDate,EndDate,HotelID,UserID,RoomID,EmployeeID) VALUE ('$reservationID','$startDate','$endDate','$hotelID','$userID','$roomid','Home01')"; 
		 
    if(mysqli_query($dblink,$makeReservation)){ //reservation successful
		$bookRoomQ="UPDATE ROOMS SET Status='booked' WHERE RoomID='$roomid'";
		if ($dblink->query($bookRoomQ) === TRUE) {
  			echo "<script>alert('Reservation successful and booked room status was updated successfully')</script>";
			
		} else {
			echo "<script>alert('Error updating the booked room status: '' . $conn->error)</script>";
  			
		}
			
		/*go back to reservations*/
		redirect("/reservations/index.php?email=$email&pwd=$pwd&userType=$userType&name=$name&last=$last&userID=$userID&employeeID=$employeeID"); 
     }else{
		echo "<script>alert('Could not make reservation with the criteria provided')</script>";
	}		
		
}

/* 9 - Booking function for Rio Inn  */
function booking9($email,$pwd,$userType,$name,$last,$userID,$employeeID,$hotelID,$roomType,$startDate,$endDate){	
	$dblink=db_iconnect("hoteldB");
																											   
	/*booking */	
	/*find available typeroom to make reservation*/
	$findRoom="SELECT * FROM ROOMS WHERE Type='$roomType' AND HotelID='$hotelID'"; 
	$resultFindRoom = mysqli_query($dblink, $findRoom);
	$numRows=mysqli_num_rows($resultFindRoom); 
	if ($numRows>0){ //if there are records with an available room of the specify type 
		while($row = mysqli_fetch_array($resultFindRoom)){
			if (strcmp($row['Status'],"available")==0){ //found an available room
				$roomid=$row['RoomID'];
				break;
			}
		}
	}
	/*Make reservation*/
	$reservationID=rand(10,10000);
	$makeReservation="INSERT INTO RESERVATION (ReservationID,StartDate,EndDate,HotelID,UserID,RoomID,EmployeeID) VALUE ('$reservationID','$startDate','$endDate','$hotelID','$userID','$roomid','Rio01')"; 
		 
    if(mysqli_query($dblink,$makeReservation)){ //reservation successful
		$bookRoomQ="UPDATE ROOMS SET Status='booked' WHERE RoomID='$roomid'";
		if ($dblink->query($bookRoomQ) === TRUE) {
  			echo "<script>alert('Reservation successful and booked room status was updated successfully')</script>";
			
		} else {
			echo "<script>alert('Error updating the booked room status: '' . $conn->error)</script>";
  			
		}
			
		/*go back to reservations*/
		redirect("/reservations/index.php?email=$email&pwd=$pwd&userType=$userType&name=$name&last=$last&userID=$userID&employeeID=$employeeID"); 
     }else{
		echo "<script>alert('Could not make reservation with the criteria provided')</script>";
	}		
		
}
	
?>
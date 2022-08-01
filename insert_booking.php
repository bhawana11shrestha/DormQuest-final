<?php
session_start();
$servername ="localhost";
$username = "root";
$password = "root";

$dbname = "dormquest";

// Create connection
$conn = new mysqli($servername,$username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
	die("Connection failed: "
		. $conn->connect_error);
}


if(isset($_POST['submit'])){
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $tmail=$_POST['temail'];
    $phoneno=$_POST['phoneno'];
    $rooms=$_POST['rooms'];
    $beds=$_POST['beds'];
    $gender=$_POST['gender'];
    $text=$_POST['text'];
    $date=$_POST['date'];

$sqlquery = "INSERT INTO bookings(first_name, last_name, email, no_of_rooms, no_of_beds,phone_no,check_in_date,gender, special_request) 
VALUES('$fname', '$lname', '$temail', '$rooms', '$beds','$phoneno','$date','$gender','$text')";

// var_dump($sqlquery); die();

if ($conn->query($sqlquery) === TRUE) {
	$_SESSION['message'] = "Booking Successfully!!";
    header("Location: booking.php");
    
} else {
	echo "Error: <br>" . $conn->error;
}

}




?>
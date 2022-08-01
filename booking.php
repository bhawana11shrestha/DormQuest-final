<?php
session_start();

include 'notification.php';
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <link rel="stylesheet" type="text/css" href="bookingform.css">
    <title>Booking form</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css">
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
  <script type="text/javascript">
 function Form_validation(){
  
	  var f_name=document.getElementById('fname').value;
		var l_name=document.getElementById('lname').value;
		var f_email=document.getElementById('temail').value;
    var f_phone=document.getElementById('phoneno').value;
		if(f_name ==""){
			document.getElementById('First_name').innerHTML="Please Fill The First Name!!";
			return false;
    }
    if(!isNaN(f_name)){
			document.getElementById('First_name').innerHTML="Only Characters Are Allowed!!";
			return false;
  }
    else{
			document.getElementById('First_name').innerHTML="";

    }
    


		if(l_name ==""){
			document.getElementById('Last_name').innerHTML="Please Fill The Last Name!!";
			return false;
		}
    if(!isNaN(l_name)){
			document.getElementById('Last_name').innerHTML="Only Characters Are Allowed!!";
			return false;
		}else{
			document.getElementById('Last_name').innerHTML="";

    }

	

			if(f_email ==""){
			document.getElementById('Email').innerHTML="Please Fill The First Name!!";
			return false;
		}
		if(f_email.indexOf('@')<= 0){
			document.getElementById('Email').innerHTML="Invalid Email!!";
			return false;
		}
		if((f_email.charAt(f_email.length-4)!='.') && (f_email.charAt(f_email.length-3)!='.')){
			document.getElementById('Email').innerHTML="Invalid Email !!";
			return false;
		}else{
			document.getElementById('Email').innerHTML="";

    }



    if(f_phone ==""){
			document.getElementById('Phone_no').innerHTML="Please Fill The Phone No!!";
			return false;
		}
		if(isNaN(f_phone)){
			document.getElementById('Phone_no').innerHTML="Only Digits Are Allowed!!";
			return false;
		}
		if(f_phone.length!=10){
			document.getElementById('Phone_no').innerHTML="Mobile No Must Be 10 Digit Long!!";
			return false;
		}else{
			document.getElementById('Phone_no').innerHTML="";

    }
	}
  
	</script>

</head>
<body>
  

    <div class="container">
     <div class="alert alert-success"> 
        <?php if(isset($_SESSION['message'])){
            echo $_SESSION['message'];
            $_SESSION['message']="";
          }
        ?> 
      </div> 
    <div class="title">Booking Form</div>



    <form  method="post" action="insert_booking.php" onsubmit="return Form_validation()" >
        <div class="user_details">
            <table>
        <tr>
        <td>
        <div class="input_box">
        <span  class="details">First Name</span>
        <input type="text" id="fname" name="fname" placeholder="Enter your name" autocomplete="off">
		<span id="First_name" class="text_error" style="color:red; font-size:12px"></span>
    </div>
    </td>
    <td>


                    <div class="input_box">
        <span class="details">Last Name</span>
        <input type="text" name="lname" id="lname"  placeholder="Enter your username" required>
		<span id="Last_name" class="text_error" style="color:red; font-size:12px"></span>
    </div>
    </td>
    </tr>


    <tr>
    <td><div class="input_box">
        <span class="details">Email</span>
        <input  type="text" name="temail" id="temail" placeholder="Enter your email" required="" value="<?php if(isset($_SESSION['email'])){echo $_SESSION['email'];}?>">
		<span id="Email" class="text_error" style="color:red; font-size:12px"></span>
    </div>
    </td>
    <td><div class="input_box">
        <span class="details">Phone no</span>
           <input type="text" name="phoneno" id="phoneno" placeholder="Enter your Phone no" required="">
		   <span id="Phone_no" class="text_error" style="color:red; font-size:12px"></span>
    </div>
    </td>
    </tr>
    <tr>
    <td>


                        <div class="input_box">
            <span class="details">No of Rooms</span>
        <select name="rooms" class="room_select">
        <option value="one">One</option>
        <option value="two">Two</option>
        <option value="three">Three</option>
        <option value="four">Four</option>
        <option value="five">Five</option>
        </select>
    </div>
    </td>
    <td>


        <div class="input_box">
        <span class="details">No of Beds</span>
        <select name="beds" class="bed_select">
        <option value="one">One</option>
        <option value="two">Two</option>
        <option value="three">Three</option>
        <option value="four">Four</option>
        <option value="five">Five</option>
        </select>
    </div>
    </td>
    </tr>
            <tr>
      <td>
                    <div class="input_box">
        <span class="details">Check In Date</span>
        <input type="date" required="" name="date">
    </div>
    </td>
    </tr>
    </table>
    </div>


    <div class=gender_details>
      <label for="gender">Gender</label></br>
      <label for="gender">Male</label><input type="radio" name="gender" value="male"><br>
      <label for="gender">Female</label><input type="radio" name="gender" value="female"><br>
      <label for="gender">Others</label><input type="radio" name="gender" value="others"></br></br>

</div>

      <div class="text_box">
        <span class="text_box">Special Request</span>
        <textarea name="text" placeholder="Your Request"></textarea>
    </div>
    <div class="button">
    <input type="submit" name="submit" value="Book" >
    </div>
        </form>
</div>
<?php






?>

	</body>
</html>
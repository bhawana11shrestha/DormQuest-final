<!DOCTYPE html>
<?php
include 'dbconnection.php';
?>
<html>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
   <link rel="stylesheet" type="text/css" href="WardenForm.css">
   <script type="text/javascript">
     function Form_validation(){
  
	  var username=document.getElementById('username').value;
		var email=document.getElementById('email').value;
    var password=document.getElementById('password').value;
    var cpassword=document.getElementById('cpassword').value;
    var flag=0;

		if(username==""){
			document.getElementById('Username').innerHTML="Please Fill The Name";
			flag++;
    }
    if(!isNaN(username)){
			document.getElementById('Username').innerHTML="Only Characters Are Allowed";
      flag++;
  }
    else{
			document.getElementById('Username').innerHTML="";

    }
    
			if(email ==""){
			document.getElementById('Email').innerHTML="Please Fill The First Name!!";
      flag++;
		}
		if(email.indexOf('@')<= 0){
			document.getElementById('Email').innerHTML="Invalid Email!!";
			flag++;
		}
		if((email.charAt(email.length-4)!='.') && (email.charAt(email.length-3)!='.')){
			document.getElementById('Email').innerHTML="Invalid Email !!";
			flag++;
		}else{
			document.getElementById('Email').innerHTML="";

    }
    if(password==""){
			document.getElementById('Password').innerHTML="Please Fill The password!!";
      flag++;
		}
  	if(password.length!=10){
			document.getElementById('Password').innerHTML="password Must Be 10 Digit Long!!";
      flag++;
    }
      if(password.length>30){
        document.getElementById('Password').innerHTML="password Is Too Long!!";
        flag++;
		}else{
			document.getElementById('Password').innerHTML="";

    }
    if(cpassword!=password){
			document.getElementById('Confirm').innerHTML="Please Confirm Password";
      flag++;
		}else{
			document.getElementById('Confirm').innerHTML="";

    }
    if (flag==0){
      return true;
    }else{
      return false;
    }
  }
</script>
</head>
<body>
  
<?php

  if(isset($_POST['submit'])){
   if(!empty($_POST['username'])&&!empty($_POST['email'])&&!empty($_POST['password'])){
      $username=$_POST['username'];
      $email=$_POST['email'];
      $password=$_POST['password'];
      $conn=mysqli_connect('localhost','root','root','dormquest');
    
      $query=mysqli_query($conn,"SELECT * FROM warden WHERE email='$email'");  
      $numrows=mysqli_num_rows($query);  
      if($numrows==0)  
      {
      $sql=("INSERT INTO warden (warden_name,warden_email,password)
        values('$username','$email','$password')");
      $run=mysqli_query($conn,$sql);
      if($run){
          echo"form submitted ";
          header('location:home.php');
      }else{
          echo"form not submitted";
      }
    }else{
        echo"email already exists";
      }
    }else{
          echo"all fields required";
      }
      mysqli_close($conn);
     
    }
?>  
    <section class='login' id="login">
  <div class='head'>
  <h1 class='company'>DORM QUEST</h1>
</div>
  <p class='msg'>Welcome Warden!!</p>
  <div class='form'>
    <form onsubmit="Form_validation()" novalidate method="post">
                <div>
                  <input type="text" placeholder='Username' class='text' name="username"id='username' required><br>
                  <span id="Username" style="color:red; font-size:12px"></span>  
                </div>

                <div>
                  <input type="email" placeholder='email' class='email' id="email" name="email"><br>
                  <span id="Email"style="color:red; font-size:12px"></span>
                </div>

                <div>
                  <input type="password" placeholder='password' class='password'id="password" name="password"><br>
                  <span id="Password"style="color:red; font-size:12px"></span>
                </div>

                <div>
                  <input type="password" placeholder='Confirm password' class='password'id="cpassword" name="cpassword" ><br>
                  <span id="Confirm" style="color:red; font-size:12px"></span>
                </div>


                <div>
                  <input type="submit" name="submit" class='btn-login' id='do-login'>
                  <div  class="signup-link">
                      <span >already have an account? <a href="wardenLogIn.php">login now</a></span>
                </div>
              </div>
        </form>
</div>
  </section>
  </body>
</html>





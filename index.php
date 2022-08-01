<?php
session_start();
?>
<!DOCTYPE html>
<?php
include 'dbconnection.php';
?>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title></title>
  <link rel="stylesheet"><link rel="stylesheet" href="forms.css">

</head>
<section class='login' id='login'>
  <div class='head'>
  <h1 class='company'>DORM QUEST</h1>
</div>
  <div class="head">
  <h3 class='company'>Best Memory Starts Here</h3>
  </div>
  <p class='msg'>Welcome back</p>
  <div class='form'>
    <form action=""method="POST">
  <input type="email" placeholder='email' class='email' name="email" id="email" required><br>

  <input type="password" placeholder='password' class='password' name="password" id="password"><br>

  <input type="submit" value="login"name="submit" class='btn-login' id='do-login'>
  <div  class="signup-link">
<span >Don't have an account? <a href="signupform.php">SIGNUP NOW</a>
</span>
</div>
    </form>
</div>
</section>
<?php  
if(isset($_POST["submit"])){  
  // var_dump($_POST); die();

  
if(!empty($_POST['email']) && !empty($_POST['password'])) {  
    $email=$_POST['email'];  
    $password=$_POST['password'];  
  
  
    $query=mysqli_query($conn, "SELECT * FROM user_info WHERE email='$email' AND password='$password'");   
    $numrows=mysqli_num_rows($query);  
    if($numrows==1)  
    {  
      while($row=mysqli_fetch_assoc($query)){  
        $_SESSION['user_id']=$row['user_id'];
        $_SESSION['username']=$row['username'];  
      }
      header("Location: home.php");   
    } else {  
    echo "Invalid email or password!";  
    }  
  
} else {  
    echo "All fields are required!";  
}  
mysqli_close($conn);
}  
?>   
</html>
</body>
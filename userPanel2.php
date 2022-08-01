<?php
session_start();
include 'admin/dbconnection.php';
//include 'include/header.php';
  /* var_dump($_POST); die();
 $query=mysqli_query($conn,"SELECT * FROM user_info where password='$password' and username='$username'");   
    if($query){
      while($row=mysqli_fetch_assoc($query)){
        $_session['username']=$row['username'];
        $_session['email']=$row['email'];
      }
    }*/?>
    <!DOCTYPE html>
    <head>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel='stylesheet' type='text/css' media='screen' href='userprofile.css'>
</head>
        <body>
        <div class="container emp-profile">
            <form  action="" method="post">
                <div class="row">
                    <div class="col-md-4">
                        <div class="profile-img">
                            <img src="profile.png" alt="profile picture"/>
                            <div class="file btn btn-lg btn-primary">
                                Change Photo
                                <input type="file" name="file">
                            </div>
                        </div>
                    </div>
                <div class="col-md-6">
                        <div class="profile-head">
                                    <h5>
                                        <?php
                                       echo $_SESSION['username'];
                                    ?>
                                    </h5>
                                    <h6>
                                        User
                                    </h6>  
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">About</a>
                                </li>
                               
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-2">
                    <a href="home.php"><button type="button" class="btn btn-link" ><b>Home</b></button></a><br/>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="profile-work">
                            <!--<p>WORK LINK</p>-->
                            <a href="signupform.php"><button type="button" class="btn btn-link" ><b>Log Out</b></button></a><br/>


                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="tab-content profile-tab" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label>Name</label>
                                            </div>
                                            <div class="col-md-4">
                                                <p>
                                                    <?php
                                                   echo $_SESSION['username'];
                                                    ?>
                                                </p>
                                            </div>
                                        </div>
                                    
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label>Email</label>
                                            </div>
                                            <div class="col-md-4">
                                                <p><?php
                                                echo $_SESSION['email'];
                                                ?>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label>Bookings</label>
                                               
                                            </div>
                                            <div class="col-md-4">
                                            <label><select id="bookings">
                                                    <option value="one">1(default)</option>
                                                    <option value="two">2</option>
                                                    <option value="three">3</option>
                                                    <option value="four">4</option>
                                                    <option value="five">5</option>
                                                </select></label>
                                            </div>
                                        </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </form>           
        </div>
</body>
        <html>

<?php
//include 'include/footer.php';
?>
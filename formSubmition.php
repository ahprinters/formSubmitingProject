<?php
// https://www.youtube.com/watch?v=YUSZSW75J6M
include __DIR__."/inc/header.inc.php";
include __DIR__."/inc/connect.php";
$title = "Form Submiting Project";
$heading = "Form Submission Project";


if(isset($POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $sql = "INSERT INTO  formsubmit (name, email, message)
    VALUES('$name', '$email', '$message')";

    if(mysqli_query($con, $sql) == TRUE){
        echo "Data Submission Successfully";
    } else{
        echo "Data Submission Successfully";

    }
    
}   
?>


    <div class="container">
        <div class="wrapper">
            <div class="form-group"><span><h1><?=$heading;?></h1> </span></div>
                <form action="submit.php" method="POST"> 
                    <fieldset>
                    <div class="row">
                        <i class="fas fa-user"></i>
                        <label for="name">Name:</label>
                        <input type="text" class="form-control-lg" placeholder="Enter Your Name" name="name" size="20" required><br>
                    </div>
                    
                    <div class="row">
                        <i class="fas fa-lock"></i>
                        <label for="email">E-mail Address:</label>
                        <input type="text" class="form-control-lg" placeholder="Enter Your E-mail Address" name="email" size="50" required><br>
                    </div>
                    <div class="row">
                        <i class="fas fa-lock"></i>
                        <label for="message">Message</label>
                        <input type="text" class="form-control-lg" placeholder="Enter Your Messege " name="message" size="250" required><br>
                        
                    </div> 
                    </fieldset> 

                    <fieldset class="center">
                        <input type="submit" value="Join The Club">
                    </fieldset>
                </div>
            </div>
<?=include __DIR__. "/inc/footer.inc.php";?>   





<?php
// https://www.youtube.com/watch?v=YUSZSW75J6M
include __DIR__."/inc/header.inc.php";
// include __DIR__."/inc/connect.php";
$title = "Form Submiting Project";
$heading = "Form Submission Project";

if(isset($_POST['submit'])){
    echo "Your Name is:" . " " . $_POST['name'];
    echo "<br>";
    echo "Your Email Address is:" . " " . $_POST['email'];
    echo "<br>";
    echo "Your Message is:" . " " . $_POST['message'];
}
// if(isset($_POST['submit'])){
    // $name = $_POST['name'];
    // $email = $_POST['email'];
    // $message = $_POST['message'];
    // $sql = "INSERT INTO  formsubmit (name, email, message)
    // VALUES('$name', '$email', '$message')";

//     if(mysqli_query($con, $sql) == TRUE){
//         echo "Data Submission Successfully";
//     } else{
//         echo "Data Submission Successfully";

//     }
    
// }   
?>


    <div class="container">
        <div class="row">
            <div class = "col-sm-3"></div>
            <div class = "col-md-6 bg-dark">
            <div class="form-group text-white"><span><h1><?=$heading;?></h1> </span></div>
                <form action="form.php" method="POST"> 
                   <!-- submit.php -->
                    <fieldset class="bg-light m-5" >
                    <div class="row mb-3">
                        <i class="fas fa-user"></i>
                        <label for="name" class="form-label">Name:</label>
                        <input type="text" class="form-control-lg" id="exampleFormControlInput1" placeholder="Enter Your Name" name="name" size="20" required><br>
                    </div>
                    
                    <div class="row mb-3">
                        <i class="fas fa-lock"></i>
                        <label for="email" class="form-label">E-mail Address:</label>
                        <input type="text" class="form-control-lg" id="exampleFormControlInput1" placeholder="Enter Your E-mail Address" name="email" size="50" required><br>
                    </div>
                    <div class="row mb-3">
                        <i class="fas fa-lock"></i>
                        <label for="message" class="form-label">Message</label>
                        <input type="text" class="form-control-lg id="exampleFormControlInput1"" placeholder="Enter Your Messege " name="message" size="250" required><br>
                        
                    </div> 
                    </fieldset> 

                    <fieldset class="center">
                        <input type="submit" value="Join The Club" name= "submit">
                    </fieldset>
            </div>
            <div class = "col-sm-3" ></div>
                </div>
            </div>
<?=include __DIR__. "/inc/footer.inc.php";?>   





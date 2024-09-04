<?php
// https://www.youtube.com/watch?v=YUSZSW75J6M
// $conn = mysqli_connect('localhost', 'root', ' ', 'formsubmission');
include __DIR__."/inc/header.inc.php";
// include __DIR__."/inc/connect.php";
$title = "Form Submiting Project";
$heading = "Form Submission Project";
// ==================================
// if(isset($_POST['submit'])){
//     echo "Your Name is:" . " " . $_POST['name'];
//     echo "<br>";
//     echo "Your Email Address is:" . " " . $_POST['email'];
//     echo "<br>";
//     echo "Your Message is:" . " " . $_POST['message'];

// ========================

// mysqli_report(MYSQLI_REPORT_OFF);
// /* @ is used to suppress warnings */
// $mysqli = @new mysqli('localhost', 'root', ' ', 'formsubmission');
// if ($mysqli->connect_error) {
//     /* Use your preferred error logging method here */
//     error_log('Connection error: ' . $mysqli->connect_error);
// }

// $mysqli = new mysqli("localhost","root"," ","formsubmission");
// ========================
// // Check connection
// if ($mysqli -> connect_errno) {
//   echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
//   exit();
// }
// =====================

// $con = mysqli_connect("localhost", "root", " ", "formsubmission");

// // Check connection
// if (mysqli_connect_errno()) {
//   echo "Failed to connect to MySQL: ";
//   exit();
// }
// ===========================
//Creating a connection

// $con = @mysqli_connect("localhost", "root", " ", "formsubmission");

// //Connection Error
// $error = mysqli_connect_error($con);
// print("Error: ".$error);
// ==================
//Creating a connection
// $con = @mysqli_connect("localhost", "root", " ", "formsubmission");
   
// //Connection Error
// $error = mysqli_connect_error();
// if(!$con){
//    print("Connection Failed: ".$error);
// }else{
//    print("Connection Established Successfully");
// }
// ==========================

$connection = @mysqli_connect("localhost","root"," ","formsubmission");
   
   if (!$connection){
      die("Connection error: " . mysqli_connect_error());
   }


if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
}
// if(isset($_POST['submit'])){
//     $name       = mysqli_real_escape_string($con, $_POST['name']);
//     $email      = mysqli_real_escape_string($con, $_POST['email']);
//     $message    = mysqli_real_escape_string($con, $_POST['message']);
    
//     $sql = "INSERT INTO `formsubmit` (name, email, message) VALUES ('$name', '$email', '$message')";
//     $stmt = mysqli_prepare($con, $sql);
    
//     if ($stmt) {
//         mysqli_stmt_bind_param($stmt, "sss", '$name', '$email', '$message');
//         if (mysqli_stmt_execute($stmt)) {
//             echo "Data Submitted Successfully";
//         } else {
//             echo "Error: " . mysqli_stmt_error($stmt);
//         }
//         mysqli_stmt_close($stmt);
//     } else {
//         echo "Error: " . mysqli_error($con);
//     }
// }
// ============================
?>


    <div class="container">
        <div class="row">
            <div class = "col-sm-3"></div>
            <div class = "col-md-6 bg-dark">
            <div class="form-group text-white"><span><h1><?=$heading;?></h1> </span></div>
                <form action="form.php" method="POST"> 
                   <!-- form.php -->
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





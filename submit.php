<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Submission Script</title>
    <style>
      <?php include 'style.css'; ?>
    </style>
  </head>
  <body>
    <?php
    // Handle form submission
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      $name = $_POST['name'];
      $email = $_POST['email'];
      $message = $_POST['message'];
      echo "<p>Thank you for your submission, $name!</p>";
      echo "<p>Your email address is $email.</p>";
      echo "<p>Your message is:</p>";
      echo "<p>$message</p>";
    } else {
      echo "<p>Error: invalid form submission method.</p>";
    }
    
    // Output query string parameters using $_GET
    if (!empty($_GET)) {
      echo "<h2>Query String Parameters:</h2>";
      echo "<ul>";
      foreach ($_GET as $key => $value) {
        echo "<li>$key: $value</li>";
      }
      echo "</ul>";
    }
    
    // Output all request parameters using $_REQUEST
    if (!empty($_REQUEST)) {
      echo "<h2>All Request Parameters:</h2>";
      echo "<ul>";
      foreach ($_REQUEST as $key => $value) {
        echo "<li>$key: $value</li>";
      }
      echo "</ul>";
    }
    ?>
  </body>
</html>

-- Table structure for table `calc`
--

CREATE TABLE IF NOT EXISTS `calc` (
  `id` int(12) NOT NULL,
  `yr` year(4) NOT NULL,
  `mnth` varchar(12) NOT NULL,
  `name` varchar(256) NOT NULL,
  `paidleave` int(12) NOT NULL,
  `balanceleave` int(12) NOT NULL,
  `unpaidleave` int(12) NOT NULL,
  `basesalary` int(12) NOT NULL,
  `deductions` int(12) NOT NULL,
  `tds` int(12) NOT NULL,
  `pf` int(12) NOT NULL,
  `finalsalary` int(12) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
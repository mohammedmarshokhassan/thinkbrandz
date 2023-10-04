<?php
    

//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL); 
    
 

 
 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';


   
 
 
    if($_SERVER['REQUEST_METHOD'] == "POST"){
    
if (isset($_POST['save'])) {
    // Retrieve form data
    //get data from form
    $n = $_POST['name'];
    $e = $_POST['email'];
    $g = $_POST['phone'];
    $pa = $_POST['subject'];
    $pe = $_POST['message'];
    
    
 
// preparing mail content
$messagecontent ="Name = ". $n . "<br>Email = " . $e . "<br>Message =" . $pe . "<br>phone=". $g . "<br>subject = ". $pa ;


//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

 
  
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'hassanmarshok@gmail.com';
    $mail->Password = 'otpp ljne ugou wzam';
    $mail->Port = 465;
    $mail->SMTPSecure = 'ssl';
    $mail->isHTML(true);
    $mail->setFrom($e, $n);
    $mail->addAddress('hassanmarshok@gmail.com ');
    $mail->Subject = ("$e ($pe) (Enquirey Details)");
    $mail->Body = $messagecontent;
    $mail->send();
    //Attachments

    //$mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
   // $mail->addAttachment('photo.jpeg', 'photo.jpeg');    //Optional name

    // Establish database connection
  $connect = mysqli_connect("localhost", "thinkbra_think", "NDXaSWDa(XNN", "thinkbra_think");

   
    if (!$connect) {
        die("Database connection failed: " . mysqli_connect_error());
    }


 

    // SQL query for inserting data
    $query = "INSERT INTO message (name, email, phone, subject, message)
              VALUES ( '$n', '$e', '$g', '$pa', '$pe')";

    // Execute the query
    if ($connect->query($query)) {
   echo "<script>alert('your enquirey has been send..!!!!');</script>";
  ?>
    <script>
    var str1 = 'https://www.thinkbrandz.com/contact.php';
    window.location.href = str1;
    </script>

    <?php
    } else {
        echo "Error: " . $query . "<br>" . $connect->error;
    }

    // Close the database connection
    $connect->close();
}
    }
    
    
    
    
   
?>  
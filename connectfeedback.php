
<?php

// This page inserts subscribers details into the subscribed table
include ('database/dbconnection.php');

//Check server connection
if ($con->connect_error){
	die ("Connection failed:". $con->connect_error);
}else {
	echo "Connected successfully <br />";
//   echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
//   <strong>Connected successfully</strong>
//   <button type="button" class="close" data-dismiss="alert" aria-label="Close">
//     <span aria-hidden="true">&times;</span>
//   </button>
// </div>';


  //receive  values from user form and trim white spaces
 $email=trim($_POST['emailfeedback']);
 $feedback=trim($_POST['feedback']);


 //check if crime  textarea is empty
 if (strlen($email) ==0 && strlen($feedback)==0){
   die('Write a feedback.');

 }


 //check if there is a duplicate
 // if ($check = mysqli_query($con,"select * from feedback where email='$email' and feedback='$feedback'")){
 //
 // $checkrows = mysqli_num_rows($check);
 // if ($checkrows>0){
 //
 // die('You have already subscribed to our newsletter.');
 // }

 }

   // now insert the validated values into database
   $sqli = "insert into feedback(email,feedback)
    VALUES('$email','$feedback')";



 if ($con->query($sqli) === TRUE) {
    echo "Thank you for your feedback";
} else {
    echo "Error: " . $sqli . "<br>" . $con->error;
}

$con->close(); //close the connection for security reasons


 ?>

 <!DOCTYPE html>
 <html>
      <head>
           <title> </title>
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
           <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
           <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>
           <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />

      </head>
      <body>


      </body>

      </html>
      <?php
      header('Refresh: 5; URL=http://localhost/websites/train/home.php');
      //other code
      ?>

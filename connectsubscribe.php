
<?php

// This page inserts subscribers details into the subscribed table
include ('database/dbconnection.php');

//Check server connection
if ($con->connect_error){
	die ("Connection failed:". $con->connect_error);
}else {
	echo "Connected successfully <br />";
  echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>Connected successfully</strong>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';


  //receive  values from user form and trim white spaces
 $email=trim($_POST['email']);
 $phonenumber=trim($_POST['phonenumber']);

 //check if crime  textarea is empty
 if (strlen($email) ==0 && strlen($phonenumber)==0){
   die('Nothing was inserted in the email and phonenumber textarea.');

 }

 //check if there is a duplicate
 if ($check = mysqli_query($con,"select * from subscribers where email='$email' and phonenumber='$phonenumber'")){

 $checkrows = mysqli_num_rows($check);
 if ($checkrows>0){

 die('You have already subscribed to our newsletter.');
 }

 }

   // now insert the validated values into database
   $sqli = "insert into subscribers(email,phonenumber)
    VALUES('$email','$phonenumber')";



 if ($con->query($sqli) === TRUE) {
    echo "New  subscriber created successfully";
} else {
    echo "Error: " . $sqli . "<br>" . $con->error;
}

$con->close(); //close the connection for security reasons

}

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

				<div class="alert alert-warning alert-dismissible fade show" role="alert">
			  <strong>Connected successfully</strong>
			  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
			    <span aria-hidden="true">&times;</span>
			  </button>
			</div>


      </body>

      </html>
      <?php
      header('Refresh: 5; URL=http://localhost/websites/train/home.php');
      //other code
      ?>

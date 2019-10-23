<?php
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
 $crime=trim($_POST['crime']);
 $datepicker=trim($_POST['datepicker']);
 $typeofcrime=trim($_POST['typeofcrime']);
 $county=trim($_POST['county']);
 $constituency =trim($_POST['constituency']);
 $link=trim($_POST['link']);

 //check if crime  textarea is empty
 if (strlen($crime) ==0 || strlen($county)==0){
   die('crime , link  and county textarea needs to be filled.');

 }

 //check if there is a duplicate
 if ($check = mysqli_query($con,"select * from civiliancrimetable where crime='$crime' and link='$link'")){

 $checkrows = mysqli_num_rows($check);
 if ($checkrows>0){

 die('record exists try again.');
 }

 }

   // now insert the validated values into database
   $sqli = "insert into civiliancrimetable(crime,date,county,constituency, type_of_crime, link)
    VALUES('$crime','$datepicker','$county','$constituency','$typeofcrime','$link')";



 if ($con->query($sqli) === TRUE) {
    echo "New  record created successfully";
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


      </body>

      </html>
      <?php
      header('Refresh: 5; URL=http://localhost/websites/train/home.php');
      //other code
      ?>

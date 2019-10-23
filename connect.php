<?php
include ('database/dbconnection.php');

//Check server connection
if ($con->connect_error){
	die ("Connection failed:". $con->connect_error);
}else {
	echo "Connected successfully <br />";


  //receive  values from user form and trim white spaces
 $crime=trim($_POST['crime']);
 $datepicker=trim($_POST['datepicker']);
 $typeofcrime=trim($_POST['typeofcrime']);
 $county=trim($_POST['county']);
 $constituency =trim($_POST['constituency']);
 $link=trim($_POST['link']);

 //check if crime  textarea is empty
 if (strlen($crime) ==0 || strlen($link)==0 || strlen($county)==0){
   die('crime , link  and county textarea needs to be filled.');

 }

 //check if there is a duplicate
 if ($check = mysqli_query($con,"select * from crimetable where crime='$crime' and link='$link'")){

 $checkrows = mysqli_num_rows($check);
 if ($checkrows>0){

 die('record exists try again.');
 }

 }

   // now insert the validated values into database
   $sqli = "insert into crimetable(crime,date,county,constituency, type_of_crime, link)
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
           <title>Predictive Policing</title>
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
           <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
           <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>
           <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />
           <style>

           </style>
      </head>
      <body>

      <!-- Image and text -->
<nav class="navbar navbar-light bg-light">
  <a class="navbar-brand" href="http://localhost/websites/train/i2.php">
    <img src="/docs/4.0/assets/brand/bootstrap-solid.svg" width="30" height="30" class="d-inline-block align-top" alt="">
    Go back
  </a>
</nav>


      <br /><br />
      <div class="container">
      <h3 align="center">Crime Table</h3>
            <br/>
            <hr/>
            <div class="table-responsive">
        <table id="crime" class="table table-striped table-bordered">
        <thead>
        <tr>
        <td>id</td>
        <td>crime</td>
        <td>date</td>
        <td>county</td>
        <td>constituency</td>
        <td>type of crime</td>
        <td>link</td>
        </tr>
        </thead>
        <?php
        require ('database/dbconnection.php');
        $query = "select * from crimetable order by id desc";
        $result = mysqli_query($con, $query);
        while ($row = mysqli_fetch_array($result)){
            echo '
            <tr>
                <td>'.$row["id"].'</td>
                <td>'.$row["crime"].'</td>
                <td>'.$row["date"].'</td>
                <td>'.$row["county"].'</td>
                <td>'.$row["constituency"].'</td>
                <td>'.$row["type_of_crime"].'</td>
                <td>'.$row["link"].'</td>
            </tr>';
        }
        ?>
        </table>
        </div>
			</div>
        </body>
        </html>
        <script>
        $(document).ready(function(){
            $('#crime').DataTable();
        });
      </script>

      </body>

      </html>

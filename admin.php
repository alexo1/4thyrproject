

<?php

// This is the admin page

// Initialize the session
session_start();

// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>

<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>ADMIN</title>
    <meta name="description" content="Ela Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">



    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/css/bootstrap-datepicker.min.css" rel="stylesheet"/>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="apple-touch-icon" href="https://i.imgur.com/QRAUqs9.png">
    <link rel="shortcut icon" href="https://i.imgur.com/QRAUqs9.png">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.0/normalize.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pixeden-stroke-7-icon@1.2.3/pe-icon-7-stroke/dist/pe-icon-7-stroke.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.2.0/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/css/style.css">



    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>





    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->

</head>
<body style="background-color:#659DBD;">
    <nav class="navbar navbar-expand-lg navbar-light bg-light"  >

      <div class="collapse navbar-collapse" id="navbarText">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="http://localhost/websites/train/i2.php">Report</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="http://localhost/websites/train/naivebayes2.php">Check Stats</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="http://localhost/websites/train/register.php">Add new user</a>
          </li>
        </ul>

        <ul class="navbar-nav " >

          <li class="list-inline-item">
             <a href="#" class="btn btn-outline-white btn-rounded"><?php echo htmlspecialchars($_SESSION["username"]); ?></a>
          </li>
        <li class="list-inline-item">
          <a href="logout.php" class="btn btn-outline-white btn-rounded">Logout</a>
        </li>
        </ul>
      </div>
    </nav>



    <br />
    <div class='container' style="background-color:#f5f5f5;">
      <div class="card-body card-block">
        <br /><br />

        <p>
          <h1>Civilian Reports </h1>
        </p>

        <!-- Start of civilan reports table -->
        <div class="container">
        <h3 align="center">Civilian Reports</h3>
              <br/>
              <hr/>


              <div class="table-responsive">
          <table id="civilianreports" class="table table-striped table-bordered">
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
          $query = "select * from civiliancrimetable order by id desc";
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
        <!-- end of civilan reports datatable -->


      </div>
    </div>
    <br />
    <div class='container' style="background-color:#f5f5f5;">
      <div class="card-body card-block">
        <br /><br />

        <p>
          <h1>Subscribed Users </h1>
        </p>

        <!-- Start of subscribers datatable -->
        <div class="container">
        <h3 align="center">Subscribers</h3>
              <br/>
              <hr/>
              <div class="table-responsive">
          <table id="crime" class="table table-striped table-bordered">
          <thead>
          <tr>
          <td>id</td>
          <td>email</td>
          <td>phonenumber</td>
          </tr>
          </thead>
          <?php
          require ('database/dbconnection.php');
          $query = "select * from subscribers order by id desc";
          $result = mysqli_query($con, $query);
          while ($row = mysqli_fetch_array($result)){
              echo '
              <tr>
                  <td>'.$row["id"].'</td>
                  <td>'.$row["email"].'</td>
                  <td>'.$row["phonenumber"].'</td>
              </tr>';
          }
          ?>
          </table>
          </div>
  			</div>

        <!-- End of subscribers datatable -->


      </div>
    </div>

    <br />
    <div class='container' style="background-color:#f5f5f5;">
      <div class="card-body card-block">
        <br /><br />

        <p>
          <h1>FeedBack from Civilans </h1>
        </p>


        <!-- Start of feedback datatable -->
        <div class="container">
        <h3 align="center">Subscribers</h3>
              <br/>
              <hr/>
              <div class="table-responsive">
          <table id="crime" class="table table-striped table-bordered">
          <thead>
          <tr>
          <td>id</td>
          <td>email</td>
          <td>feedback</td>
          </tr>
          </thead>
          <?php
          require ('database/dbconnection.php');
          $query = "select * from feedback order by id desc";
          $result = mysqli_query($con, $query);
          while ($row = mysqli_fetch_array($result)){
              echo '
              <tr>
                  <td>'.$row["id"].'</td>
                  <td>'.$row["email"].'</td>
                  <td>'.$row["feedback"].'</td>
              </tr>';
          }
          ?>
          </table>
          </div>
  			</div>

        <!-- End of feedback datatable -->


      </div>
    </div>
    <br />

    <div class='container' style="background-color:#f5f5f5;">
      <div class="card-body card-block">
        <br /><br />

        <p>
          <h1>SuperUsers </h1>
        </p>

        <!-- Start of superusers datatable -->
        <div class="container">
        <h3 align="center">Subscribers</h3>
              <br/>
              <hr/>
              <div class="table-responsive">
          <table id="crime" class="table table-striped table-bordered">
          <thead>
          <tr>
          <td>id</td>
          <td>username</td>
          <td>password</td>
          </tr>
          </thead>
          <?php
          require ('database/dbconnection.php');
          $query = "select * from superusers order by id desc";
          $result = mysqli_query($con, $query);
          while ($row = mysqli_fetch_array($result)){
              echo '
              <tr>
                  <td>'.$row["id"].'</td>
                  <td>'.$row["username"].'</td>
                  <td>'.$row["password"].'</td>
              </tr>';
          }
          ?>
          </table>
          </div>
  			</div>

        <!-- End of superusers datatable -->


      </div>
    </div>
    <br />



  </body>


</html>

<script>
$(document).ready(function(){
    $('#crime').DataTable();
});
</script>

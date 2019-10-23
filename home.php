<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>HOME</title>
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

    <!-- <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script> -->



</head>
<body style="background-color:#659DBD;"  >

  <nav class="navbar navbar-expand-lg navbar-light bg-light"  >

    <div class="collapse navbar-collapse" id="navbarText">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">About</a>
        </li>
        <!-- <li class="nav-item">
          <a class="nav-link" href="http://localhost/websites/train/naivebayes2.php">Most Crimes</a>
        </li> -->
      </ul>

      <ul class="navbar-nav " >

        <li class="list-inline-item">
        <a href="http://localhost/websites/train/login.php" class="btn btn-outline-white btn-rounded">Login</a>
      </li>
      <!-- <li class="list-inline-item">
        <a href="#!" class="btn btn-outline-white btn-rounded">Logout</a>
      </li> -->
      </ul>
    </div>
  </nav>

<br />
<div class='container' style="background-color:#edf5e1;">
  <div class="card-body card-block">
    <br /><br />

    <p>
      <!-- <h1>this is the landing page </h1> -->
    </p>


  </div>
</div>
<br />
<div class='container' style="background-color:#f5f5f5;">
  <div class="card-body card-block">
    <span><h1>Report a crime</h1></span>
    <br /><br />


    <form action="connect2.php" method="post" enctype="multipart/form-data" class="form-horizontal">
        <div class="row form-group">

            <div class="col col-md-3"><label class=" form-control-label">Label</label></div>
            <div class="col-12 col-md-9">
                <p class="form-control-static">Report</p>
            </div>
        </div>
        <hr />

        <div class="row form-group">
            <div class="col col-md-3"><label for="textarea-input" class=" form-control-label">Crime</label></div>
            <div class="col-12 col-md-9"><textarea name="crime" id="crime" rows="9" placeholder="Content..." class="form-control"></textarea></div>
        </div>

        <div class="row form-group">
          <div class="col col-md-3"><label class=" form-control-label">Pick a Date</label></div>
          <div class="col-12 col-md-9">
            <input data-date-format="dd/mm/yyyy" id="datepicker" name="datepicker" />
          </div>
        </div>
        <div class="row form-group">
            <div class="col col-md-3"><label for="selectSm" class=" form-control-label">Types of Crime</label></div>
            <div class="col-12 col-md-9">
                <select name="typeofcrime" id="selectSm" class="form-control-sm form-control">

                    <option value="Assault">Assault</option>
                    <option value="Arson">Arson</option>
                    <option value="Bribery">Bribery</option>
                    <option value="Burglary">Burglary</option>
                    <option value="Child Abuse">Child Abuse</option>
                    <option value="Child Pornography">Child Pornography</option>
                    <option value="Credit Card Fraud">Credit Card Fraud</option>
                    <option value="Conspiracy">Conspiracy</option>
                    <option value="Cyberbulling">Cyberbulling</option>
                    <option value="Disturbing the peace">Disturbing the peace</option>
                    <option value="Domestic Violence">Domestic Violence</option>
                    <option value="Drug Possession">Drug Possession</option>
                    <option value="Extortion">Extortion</option>
                    <option value="Fraud">Fraud</option>
                    <option value="Harassment">Harassment</option>
                    <option value="Homicide">Homicide</option>
                    <option value="Human Trafficking">Human Trafficking</option>
                    <option value="Identity Theft">Identity Theft</option>
                    <option value="Kidnapping">Kidnapping</option>
                    <option value="Manslaughter">Manslaughter</option>
                    <option value="Money Laundering">Money Laundering</option>
                    <option value="Murder">Murder</option>
                    <option value="Probation Violation">Probation Violation</option>
                    <option value="Poaching">Poaching</option>
                    <option value="Rape">Rape</option>
                    <option value="Robbery">Robbery</option>
                    <option value="Sexual Assault">Sexual Assault</option>
                    <option value="Shoplifting">Shoplifting</option>
                    <option value="Stalking">Stalking</option>
                    <option value="Tax Evasion">Tax Evasion</option>
                    <option value="Vandalism">Vandalism</option>
                    <option value="White Collar Crimes">White Collar Crimes</option>
                </select>
            </div>
        </div>
        <div class="row form-group">
            <div class="col col-md-3"><label for="selectSm" class=" form-control-label">Select County</label></div>
            <div class="col-12 col-md-9">
                <select name="county" id="county" class="form-control-sm form-control">

                    <option value="Mombasa">Mombasa</option>
                    <option value="Kwale">Kwale</option>
                    <option value="Kilifi">Kilifi</option>
                    <option value="Tana River">Tana River</option>
                    <option value="Lamu">Lamu</option>
                    <option value="Taita-Taveta">Taita-Taveta</option>
                    <option value="Garissa">Garissa</option>
                    <option value="Wajir">Wajir</option>
                    <option value="Mandera">Mandera</option>
                    <option value="Marsabit">Marsabit</option>
                    <option value="Isiolo">Isiolo</option>
                    <option value="Meru">Meru</option>
                    <option value="Tharaka-Nithi">Tharaka-Nithi</option>
                    <option value="Embu">Embu</option>
                    <option value="Kitui">Kitui</option>
                    <option value="Machakos">Machakos</option>
                    <option value="Makueni">Makueni</option>
                    <option value="Nyandarua">Nyandarua</option>
                    <option value="Nyeri">Nyeri</option>
                    <option value="Kirinyaga">Kirinyaga</option>
                    <option value="Muranga">Muranga</option>
                    <option value="Kiambu">Kiambu</option>
                    <option value="Turkana">Turkana</option>
                    <option value="West Pokot">West Pokot</option>
                    <option value="Samburu">Samburu</option>
                    <option value="Trans-Nzioa">Trans-Nzioa</option>
                    <option value="Uasin Gishu">Uasin Gishu</option>
                    <option value="Elgeyo-Marakwet">Elgeyo-Marakwet</option>
                    <option value="Nandi">Nandi</option>
                    <option value="Baringo">Baringo</option>
                    <option value="Laikipia">Laikipia</option>
                    <option value="Nakuru">Nakuru</option>
                    <option value="Narok">Narok</option>
                    <option value="Kajiado">Kajiado</option>
                    <option value="Kericho">Kericho</option>
                    <option value="Bomet">Bomet</option>
                    <option value="Kakamega">Kakamega</option>
                    <option value="Vihiga">Vihiga</option>
                    <option value="Bungoma">Bungoma</option>
                    <option value="Busia">Busia</option>
                    <option value="Siaya">Siaya</option>
                    <option value="Kisumu">Kisumu</option>
                    <option value="Homa Bay">Homa Bay</option>
                    <option value="Migori">Migori</option>
                    <option value="Kisii">Kisii</option>
                    <option value="Nyamira">Nyamira</option>
                    <option value="Nairobi">Nairobi</option>
                </select>
            </div>
        </div>

        <div class="row form-group">
            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Constituency</label></div>
            <div class="col-12 col-md-9"><input type="text" id="constituency" name="constituency" placeholder="Please select a Constituency" class="form-control"><small class="form-text text-muted">This is where you will add the Constituency</small></div>
        </div>

        <div class="row form-group">
            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Link</label></div>
            <div class="col-12 col-md-9"><input type="text" id="link" name="link" placeholder="Link" class="form-control"><small class="form-text text-muted">This is where you will paste the link</small></div>
        </div>

        <div class="card-footer">
            <button type="Submit" class="btn btn-primary btn-sm">
                <i class="fa fa-dot-circle-o"></i> Submit
            </button>

        </div>

    </form>


  </div>
</div>

<br />
<div class='container' style="background-color:#f5f5f5;">
  <div class="card-body card-block">
    <br /><br />

    <p>
      <!-- <h1>this is the landing page3 </h1> -->
    </p>


  </div>
</div>
<br />





<!-- Footer -->

<footer id="footer" class="clearfix" >
      <div id="footer-widgets">

        <div class="container">

        <div id="footer-wrapper">

          <div class="row">
            <div class="col-sm-6 col-md-2">
              <div id="meta-3" class="widget widgetFooter widget_meta">
              <h4 class="widgettitle">Importent Page :</h4>
              <ul>
    		  <li><a href="#"><i class="fa fa-home fa-fw"></i> Home</a></li>
			  <li><a href="privacypolicy.php"><i class="fa fa-link"></i>   Privacy Policy</a></li>
			  <li><a href="#"><i class="fa fa-envelope fa-fw"></i> Contact Us</a></li>
             </ul>
</div>      </div> <!-- end widget1 -->

            <div class="col-sm-6 col-md-2">
              		<div id="recent-posts-3" class="widget widgetFooter widget_recent_entries">
                    <h4 class="widgettitle">Our social media :</h4>
                    <ul>
					<li>
				     <a href="#" target="_blank"><i class="fa fa-facebook"></i> Facebook</a>
					</li>
					<li>
				      <a href="#" target="_blank"><i class="fa fa-twitter"></i> Twitter</a>
					</li>
					<li>
				      <a href="#" target="_blank"><i class="fa fa-youtube"></i> Youtube</a>
				   </li>
				</ul>
		</div>            </div> <!-- end widget1 -->


            <div class="col-sm-6 col-md-4">
              <div id="meta-4" class="widget widgetFooter widget_meta">
                <form action="connectsubscribe.php" method="post" enctype="multipart/form-data" class="form-horizontal">
              <h4 class="widgettitle">Subscribe :</h4>

              <div class="form-group">
                <div class="input-group">
                  <span class="input-group-addon">E-mail :</span>
                  <input class="form-control" id="email" name="email" placeholder="Write your email..." type="text">
                </div>
              </div>

              <div class="form-group">
                <div class="input-group">
                  <span class="input-group-addon">Phone  :</span>
                  <input class="form-control" id="phonenumber" name="phonenumber" placeholder="0700xxxxxx" maxlength="10"  type="text">
                   <span class="input-group-btn">
                    <!-- <button class="btn btn-primary" type="button">Subscribe !</button> -->
                    <button type="Submit" class="btn btn-primary btn-sm">
                        <i class="fa fa-dot-circle-o"></i> Submit
                    </button>
                  </span>
                </div>
              </div>
            </form>


              </div>
             </div> <!-- end widget1 -->

             <div class="col-sm-6 col-md-4">
               <div id="meta-5" class="widget widgetFooter widget_meta">
                 <form action="connectfeedback.php" method="post" enctype="multipart/form-data" class="form-horizontal">
               <h4 class="widgettitle">Leave us a feedback :</h4>

               <div class="form-group">
                 <div class="input-group">
                   <span class="input-group-addon">E-mail :</span>
                   <input class="form-control" id="emailfeedback" name="emailfeedback" placeholder="Write your email..." type="text">
                 </div>
               </div>

               <div class="form-group">
                 <div class="input-group">
                   <span class="input-group-addon">Feedback  :</span>
                   <input class="form-control" id="feedback" name="feedback" placeholder="write here..."   type="text">
                    <span class="input-group-btn">
                     <!-- <button class="btn btn-primary" type="button">Subscribe !</button> -->
                     <button type="Submit" class="btn btn-primary btn-sm">
                         <i class="fa fa-dot-circle-o"></i> Submit
                     </button>
                   </span>
                 </div>
               </div>
             </form>


               </div>
             </div> <!-- end widget2 -->




          </div> <!-- end .row -->

        </div> <!-- end #footer-wrapper -->

        </div> <!-- end .container -->
      </div> <!-- end #footer-widgets -->

      <div id="sub-floor">
        <div class="container">
          <div class="row">
            <div class="col-md-4 copyright">
             Copyright for Me © 2019
            </div>
            <div class="col-md-4 col-md-offset-4 attribution">
             Developer by  <a target="_blank" href="#">Me</a> .
            </div>
          </div> <!-- end .row -->
        </div>
      </div>

    </footer>

<!-- Footer -->



<!-- Right Panel -->

<script src="https://cdn.jsdelivr.net/npm/jquery@2.2.4/dist/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.4/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-match-height@0.7.2/dist/jquery.matchHeight.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/js/bootstrap-datepicker.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<script src="assets/js/main.js"></script>

<!-- Datepicker js -->
<script type="text/javascript">
$('#datepicker').datepicker({
  weekStart: 1,
  daysOfWeekHighlighted: "6,0",
  autoclose: true,
  todayHighlight: true,
});
$('#datepicker').datepicker("setDate", new Date());

</script>

</body>
</html>

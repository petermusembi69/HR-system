<?php 
session_start();
if(!isset($_SESSION['uid']))
{
	header("location:index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Home</title>
    <meta charset="utf-8">
    <meta name="format-detection" content="telephone=no"/>
    <script src="/cdn-cgi/apps/head/3ts2ksMwXvKRuG480KNifJ2_JNM.js"></script><link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/bootstrap.css"/>    
    <link rel="stylesheet" href="css/style.css">
    <script src="js/jquery.js"></script>
    <script src="js/jquery-migrate-1.2.1.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/main.js"></script>


    <!--[if lt IE 10]>
    <html class="lt-ie10">
    <div style='background: #212121; padding: 10px 0; box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3); clear: both; text-align:center; position: relative; z-index:1;'>
        <a href="http://windows.microsoft.com/en-US/internet-explorer/..">
            <img src="images/ie8-panel/warning_bar_0000_us.jpg" border="0" height="42" width="820"
                 alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."/>
        </a>
    </div>
    <script src="js/html5shiv.js"></script>
    <![endif]-->

</head>
<body id="page_layout" class="wide">
<div class="page">
    <!--========================================================
                              HEADER
    =========================================================-->
    <header>

        <div id="stuck_container" class="stuck_container">
            <div class="container-fluid">
                <div class="row row-sm-middle">
                    <div class="col-sm-5">
                        <a href="index.html" class="brand">
                            <div class="brand_name material-icons-local_florist">
                                Dedan kimathi human resource system
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-7 text-right col--offset-none">
                        <nav class="nav">
                            <ul class="sf-menu" data-type="navbar">
                                <li class="active">
                                    <a href="profile.php"><?php echo $_SESSION["name"].' '.$_SESSION["lname"].'\'S '?>profile</a>
                                </li>
                                <li>
                                    <a href="logout.php">Login out</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>

    </header>
    <!--========================================================
                              CONTENT
    =========================================================-->
    <main>
    <p><br/></p>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 text-center">
                <hr>
                <div><p class="text-monospace">Leave information </p></div>
                <hr/>
            </div>
        </div>
    </div>
    <p><br/></p>
       <div class="container-fluid">
		     <div class="row">
			     <div class="col-md-1"></div>
				 <div class="col-md-10">
                   <div class="container-fluid">
                      <div class='row'>
                        <div class='col-md-3'><label for="sdate">Start date</label></div>
                        <div class='col-md-3'><label for="edate">End Date</label></div>
                        <div class='col-md-3'><label for="days">Number of Days</label></div>
                        <div class='col-md-3'><label for="month">Month</label></div>
                      </div>
                    </div>
                 <div id="leave_msg"></div>
                 </div>
				 <!--leave -->
				 <div class="col-md-1"></div>
			 </div>
       </div>
       <p><br/></p>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 text-center">
                <hr>
                <div><p class="text-monospace">Raise complain </p></div>
                <hr/>
            </div>
        </div>
    </div>
    <p><br/></p>
    <div class= "container-fluid">
	<div class='row'>
		     <div class="col-md-1"></div>
			   <div class="col-md-10" id="complain_msg"></div>
			 <div class="col-md-1"></div>
	</div>
	</div>

    <div class="container-fluid">
    <form method="post">
        <div class="row">
        <div class='col-md-1'></div>
        <div class='col-md-10'>
          <div class="form-group">
              <label for="exampleInputEmail1">Email address</label>
              <input type="email" class="form-control" name="exampleInputEmail1" id="exampleInputEmail1" placeholder="Enter email">
          </div>
          <div class="form-group">
              <label for="exampleInputEmail1">Offender's Email address</label>
              <input type="email" class="form-control" name="exampleOffend" id="exampleOffend" placeholder="Enter email">
          </div>
          <div class="form-group">
              <label for="Subject">Subject</label>
              <input type="text" class="form-control" name="exampleSubject" id="exampleSubject" placeholder="Subject">
          </div>
          <div class="form-group">
              <label for="Subject">Brief description</label>
              <textarea class="form-control" name="exampleDescription" id="exampleDescription" rows= '5'></textarea>
          </div>
        <button type="button" class="btn btn-primary btn-sm" id = "complainsubmit" style = "float:right";>Submit</button>
        </div>
        <div class='col-md-1'></div>
        </div>
        </form>
    </div>
    <p><br/></p>

    </main>

    <!--========================================================
                              FOOTER
    =========================================================-->
    <footer>
        <section>
            <div class="container-fluid text-center text-lg-left">

                <div class="row">

                    <div class="col-lg-6">
                        <address class="location">
                    <span class="icon icon-md icon-primary material-icons-location_on">
                    </span>
                            Nyeri, Kenya
                        </address>
                    </div>
                    <div class="col-lg-6 text-center text-lg-right">
                        <ul class="inline-list">
                            <li>
                                <a href="#"><span class="icon icon-sm icon-primary fa-facebook"></span></a>
                            </li>
                            <li>
                                <a href="#"><span class="icon icon-sm icon-primary fa-twitter"></span></a>
                            </li>
                            <li>
                                <a href="#"><span class="icon icon-sm icon-primary fa-google-plus"></span></a>
                            </li>
                        </ul>
                        <p class="copyright">
                            Human Resource System &#169; <span id="copyright-year"></span>.
                            <a href="index-5.html">Privacy Policy</a>
                            <!-- {%FOOTER_LINK} -->
                        </p>
                    </div>

                </div>
            </div>
        </section>

    </footer>

</div>

</body>
</html>
<?php 
session_start();
if(!isset($_SESSION["uid"]))
{
	header("location:index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Admin</title>
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
                                Dekut human resource system 
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-7 text-right col--offset-none">
                        <nav class="nav">
                            <ul class="sf-menu" data-type="navbar">
                                <li>
                                    <a href="adminprofile.php">adminprofile</a>
                                </li>                            
                                <li>
                                    <a href="create.php">Register</a>
                                </li>
                                <li>
                                    <a href="leave.php">Leaves</a>
                                </li>
                                <li class="active">
                                    <a href="search.php">Department</a>
                                </li>
                                <li>
                                    <a href="searchemp.php">Employee</a>
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
<body>
<p><br/></p>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 text-center">
                <hr>
                <div><p class="text-monospace">Search for Departmental employees </p></div>
                <hr/>
            </div>
        </div>
    </div>
  <div class="container-fluid">
        <div class="row">
        <div class="col-md-4"></div>
            <div class="col-md-4 text-center">
              <form method="POST" class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" id="search_hr" placeholder="Business">
                <button class="btn btn-outline-success my-2 my-sm-0" id="search_btn">Search</button>
              </form>
            </div>
        <div class="col-md-4"></div>
        </div>
    </div>
    <p><br/></p>
    <p><br/></p>

    <div class="container-fluid">
		     <div class="row">
			     <div class="col-md-1"></div>
				 <div class="col-md-10" id="get_results"></div>
				 <!--student results -->
				 <div class="col-md-1"></div>
			 </div>
       </div>
       </main>
</body>
</html>	
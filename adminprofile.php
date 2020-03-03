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
    <title>Home</title>
    <meta charset="utf-8">
    <meta name="format-detection" content="telephone=no"/>
    <script src="/cdn-cgi/apps/head/3ts2ksMwXvKRuG480KNifJ2_JNM.js"></script><link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/grid.css">
    <link rel="stylesheet" href="css/style.css">

    <script src="js/jquery.js"></script>
    <script src="js/jquery-migrate-1.2.1.js"></script>


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

    <script src='js/device.min.js'></script>
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
                                DeKut human resource system
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-7 text-right col--offset-none">
                        <nav class="nav">
                            <ul class="sf-menu" data-type="navbar">
                                <li class="active">
                                    <a href="adminprofile.php">adminprofile</a>
                                </li>
                                <li>
                                    <a href="create.php">Register</a>
                                </li>
                                <li>
                                    <a href="leave.php">Leaves</a>
                                </li>
                                <li>
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

<script src="js/script.js"></script>
<script type="text/javascript">
 var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-7078796-5']);
  _gaq.push(['_trackPageview']);
  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();</script>
</body><!-- Google Tag Manager --><noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-P9FT69"height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript><script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start': new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src='//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);})(window,document,'script','dataLayer','GTM-P9FT69');</script><!-- End Google Tag Manager -->
</html>
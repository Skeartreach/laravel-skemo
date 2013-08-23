<!DOCTYPE html>
<html lang="en" style="background-color:rgb(235,198,158);">
  <head>
    <title>SkeartLeak &middot; Watch</title>
    <link rel="SHORTCUT ICON" href="/favicon.ico" />
	<link href="../assets/css/bootstrap.css" rel="stylesheet">
    <link href="../assets/css/bootstrap-responsive.css" rel="stylesheet">
  </head>
  <body  style="background-image: linear-gradient(bottom, rgb(235,198,158) 16%, rgb(255,255,246) 74%, rgb(255,255,255) 87%);
background-image: -o-linear-gradient(bottom, rgb(235,198,158) 16%, rgb(255,255,246) 74%, rgb(255,255,255) 87%);
background-image: -moz-linear-gradient(bottom, rgb(235,198,158) 16%, rgb(255,255,246) 74%, rgb(255,255,255) 87%);
background-image: -webkit-linear-gradient(bottom, rgb(235,198,158) 16%, rgb(255,255,246) 74%, rgb(255,255,255) 87%);
background-image: -ms-linear-gradient(bottom, rgb(235,198,158) 16%, rgb(255,255,246) 74%, rgb(255,255,255) 87%);

background-image: -webkit-gradient(
  linear,
  left bottom,
  left top,
  color-stop(0.16, rgb(235,198,158)),
  color-stop(0.74, rgb(255,255,246)),
  color-stop(0.87, rgb(255,255,255))
);">
    <!-- NAVBAR
    ================================================== -->
    <div class="navbar-wrapper">
      <!-- Wrap the .navbar in .container to center it within the absolutely positioned parent. -->
      <div class="container">

        <div class="navbar navbar-inverse">
          <div class="navbar-inner">
            <!-- Responsive Navbar Part 1: Button for triggering responsive navbar (not covered in tutorial). Include responsive CSS to utilize. -->
            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </a>
             <a class="brand" href="#">SkeartLeak</a>
            <!-- Responsive Navbar Part 2: Place all navbar contents you want collapsed withing .navbar-collapse.collapse. -->
            <div class="nav-collapse collapse">
              <ul class="nav">
                <li><a href="../index.php">Films</a></li>
                <li class="active"><a href="#">Séries</a></li>
                  </ul>
                </li>
              </ul>
            </div><!--/.nav-collapse -->
          </div><!-- /.navbar-inner -->
        </div><!-- /.navbar -->
      </div> <!-- /.container -->
    </div><!-- /.navbar-wrapper -->
    </br>

    <?php

    if (isset($_GET['type'])){
      $TypeDirectory = "http://raspberrypi/";
      $filmname = $_GET['filmname'];
      $realName = $_GET['filmNameNude'];
      $filmdirectory = $_GET['filmdirectory'];
      $filmdirectory= substr($filmdirectory,2);
      print("  <center> <hr>
      <h2>".$realName."</h2></center>
      <hr>
      <center>
      <object  width='800' height='500' codebase='http://go.divx.com/plugin/DivXBrowserPlugin.cab'>
      <param name='custommode' value='none' />
      <param name='autoPlay' value='false' />
      <param name='src' value='".$TypeDirectory.$filmdirectory.$filmname."' />
      <embed type='video/divx' src='".$TypeDirectory.$filmdirectory.$filmname."' custommode='none' width='800' height='420' autoPlay='false'  pluginspage='http://go.divx.com/plugin/download/'>
      </embed>
      </object>
      <br />Pas de vidéo ? <a href='http://www.divx.com/software/divx-plus/web-player' target='_blank'>Download</a> the DivX Plus Web Player.
      <br />Problème de codecs ? <a href=' http://sourceforge.net/projects/ac3filter/files/ac3filter/ac3filter_1_51a/ac3filter_1_51a.exe/download' target='_blank'>Download</a> DirectShow correcteur.
     
      </center>
      </center>
     ");
    }
    else{
      print("  <hr>
    <center><h2>Impossible d'afficher la vidéo désirée</h2></center>
    <hr>
      ");
    }  
?>
  </div>
  </br>

  </body>
</html>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <title>SkeartLeak &middot; Séries</title>
    <link rel="SHORTCUT ICON" href="/favicon.ico" />
  <link href="../assets/css/bootstrap.css" rel="stylesheet">
    <link href="../assets/css/bootstrap-responsive.css" rel="stylesheet">
  </head>
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
             <a class="brand" href="#" style='font-family:"Comic Sans MS", cursive, sans-serif;'>SkeartLeak</a>
            <!-- Responsive Navbar Part 2: Place all navbar contents you want collapsed withing .navbar-collapse.collapse. -->
            <div class="nav-collapse collapse">
              <ul class="nav">
                <li ><a href="../index.php" style='font-family:"Comic Sans MS", cursive, sans-serif;'>Films</a></li>
                <li class="active"><a href="#" style='font-family:"Comic Sans MS", cursive, sans-serif;'>Séries</a></li>
                  </ul>
                </li>
              </ul>
            </div><!--/.nav-collapse -->
          </div><!-- /.navbar-inner -->
        </div><!-- /.navbar -->

      </div> <!-- /.container -->
    </div><!-- /.navbar-wrapper -->
  </div>
  <hr>
  <center><IMG SRC="../images/logoSeries.png"
 ALT="logo"></center>
  <hr>
  <div class='section' style='width: 100%; height: 50%;'>
<?php

if(isset($_GET['dir'])){
$dir = $_GET['dir'];
}
else
{
  $dir = "../download/Series/";
}
$already=0;
$BASE = "../download/Series/";
function list_dir($base, $cur, $level=0) {
  global $PHP_SELF, $BASE;
  if ($dir = opendir($base)) {
    while($entry = readdir($dir)) {
      /* chemin relatif à la racine */
      $file = $base."/".$entry;
      if(is_dir($file) && !in_array($entry, array(".",".."))) {
        /* marge gauche */
        for($i=1; $i<=(4*$level); $i++) {
            echo "&nbsp;";
        }
        /* l'entrée est-elle le dossier courant */
        if($file == $cur) {
          echo "<b>$entry</b><br />\n";
        } else {
          echo "<a href=\"?dir=".rawurldecode($file)."/"."\">$entry</a><br />\n";
        }
        /* l'entrée est-elle dans la branche dont le dossier courant est la feuille */
        /*if(ereg($file."/",$cur."/")) {
            list_dir($file, $cur, $level+1);
        }*/
      }
    }
    closedir($dir);
  }
}
function list_subdir($base, $cur, $level=0) {
  global $PHP_SELF, $BASE;
  if ($dir = opendir($base)) {
    while($entry = readdir($dir)) {
      /* chemin relatif à la racine */
      $file = $base."/".$entry;
      if(is_dir($file) && !in_array($entry, array(".",".."))) {
        /* marge gauche */
        for($i=1; $i<=(4*$level); $i++) {
            echo "&nbsp;";
        }
        /* l'entrée est-elle le dossier courant */
        if($file == $cur) {
          echo "<b>$entry</b><br />\n";
        } else {
          echo "<a href=\"?dir=".rawurldecode($file)."/"."\">$entry</a><br />\n";
        }
        /* l'entrée est-elle dans la branche dont le dossier courant est la feuille */
        /*if(ereg($file."/",$cur."/")) {
            list_dir($file, $cur, $level+1);
        }*/
      }
    }
    closedir($dir);
  }
}
function list_file($cur) {
  if ($dir = opendir($cur)) {
    while($file = readdir($dir)) {
      echo "$file<br />\n";
    }
    closedir($dir);
  }
}
?>
<div class="nav">
<table class="table table-bordered" style="width: 25%; float: left;">
<tr valign="top"><td>

<!-- liste des répertoires
et des sous-répertoires -->
<?php 
/* lien sur la racine */
if(!$dir) {
  echo "/<br />";
} else {
  echo "<a href=\"\"></a><br />";
}
$already+=1;
list_dir($BASE, rawurldecode($dir), 1); 
?>

</td><td>

<!-- liste des fichiers -->
<?php
/* répertoire initial à lister */
if($dir!=$BASE) {
echo "/<br />";
list_subdir($dir, rawurldecode($dir), 1);
}
//print("<a href=\"?dir=".$subdir."\">/</a><br />");
;
?>

</td></tr>
</table>
</div>
  <center>
  <table class="table table-striped" style="float: right;">
     <tr> 
  <th > N°</th> 
 <th> Titre</th> 
 <th> Taille</th> 
 <th> Type</th> 
 <th colspan="2">Options</th>
  </tr> 
  <?php
$dirname = rawurldecode($dir);
$dir = opendir($dirname); 
$i=0;
while($file = readdir($dir)) {
  if($file != '.' && $file != '..' && !is_dir($dirname.$file))
  {
    $path_parts = pathinfo($dirname.$file);
    if(strtolower($path_parts['extension'])=='mkv'||strtolower($path_parts['extension'])=='avi'||strtolower($path_parts['extension'])=='mp4'||strtolower($path_parts['extension'])=='iso'){
    $i++;
    $filesize = filesize($dirname.$file)/1024/1024;
    $filetype = filetype($dirname.$file);
    $filename = str_replace('.', ' ', $path_parts['filename']);
    print(' <tr >
    <td>'.$i.'</td>
    <td>'.$filename.'</td>
    <td>'.number_format($filesize,2).' <b>Mb</b></td>
    <td>'.strtoupper($path_parts['extension']).'</td>
    <td>
    ');
    print("<a button class='btn btn-mini btn-success' type='button' href='../pages/watch.php?type=serie&filmNameNude=".$filename."&filmname=".$path_parts['basename']."&filmdirectory=".$dirname."'style='margin-right: 5px;'><i class='icon-eye-open'></i></a>");
    print("<a button class='btn btn-mini btn-danger' type='button' href='../pages/watch.php?type=serie&filmNameNude=".$filename."&filmname=".$path_parts['basename']."&filmdirectory=".$dirname."'style='margin-right: 5px;'><i class='icon-trash'></i></a>");
    print("<a button class='btn btn-mini btn-inverse' type='button' href='../download/".$dirname.$filename."'style='margin-right: 5px;'><i class='icon-folder-open icon-white'></i></a>");
    print("<a button class='btn btn-mini btn-warning' type='button' alt='Favorite' href=''style='margin-right: 5px;'><i class='icon-star icon-white'></i></a>");
      print('
    </td>
  </tr>');
    }
  }
}

closedir($dir);
 ?>
    </table>
</center>
</div><!-- End section -->
<hr>
<hr>
  </body>
</html>

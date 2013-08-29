<?php
if (!(Session::has('username')))
{
    print('<meta http-equiv="refresh" content="0;url='.URL::to('./login').'">'); 
}else{
?>
<!DOCTYPE html>
<html lang="fr">
  <head>
  	<title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">

      <link rel="stylesheet" href="../Bootstrap/dist/css/bootstrap.min.css">
      <link rel="stylesheet" href="../Bootstrap/dist/css/bootstrap.css">
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
        <script src="../Bootstrap/Scripts/bootstrap.js" type="text/javascript"></script>
        <script type="text/javascript" src="http://twitter.github.com/bootstrap/assets/js/bootstrap-dropdown.js"></script>
        <script src="../Bootstrap/dist/js/bootstrap.min.js"></script>
        <script src="../Bootstrap/assets/js/bootswatch.js"></script>
        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
        <script src="../bower_components/bootstrap/assets/js/html5shiv.js"></script>
        <script src="../bower_components/bootstrap/assets/js/respond.min.js"></script>
        <![endif]-->
  </head>
  <body>
              <div class="navbar navbar-default">
                <div class="container">
                  <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand">Skemo</a>
                  </div>
                  <div class="navbar-collapse collapse navbar-responsive-collapse">
                    <ul class="nav navbar-nav">
                      <?php
                      if(isset($active)){
                      if($active=='add'){
                        print('
                      <li ><a href="./entities">Entities</a></li>
                      <li ><a href="./posts">Posts</a></li>
                      <li ><a href="./branches">Branches</a></li>');
                      }
                    }
                    else{
                      print('
                      <li ><a href="../entities">Entities</a></li>
                      <li ><a href="../posts">Posts</a></li>
                      <li ><a href="../branches">Branches</a></li>
                      ');

                    }
                      ?>
                        <li class="dropdown">
                        <a href="" class="dropdown-toggle" data-toggle="dropdown" >Add <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                        <li><a href="../entities/new">Nouvelle entité</a></li>
                        <li><a href="../posts/new">Nouveau post</a></li>
                        <li><a href="../branches/new">Nouvelle branche</a></li>
                        </ul>
                        </li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                  
                  </ul>
                  </div><!-- /.nav-collapse -->
                </div><!-- /.container -->
              </div><!-- /.navbar -->
    <body>
        @section('content')
         
        @show
        @section('footer')

  </body>
  <footer style="text-align:left; padding-left:20px;">
    &copy; Copyright skdev.ch - BG
  </footer>
</html>
<?php }?>
@show

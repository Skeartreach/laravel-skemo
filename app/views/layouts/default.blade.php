<!DOCTYPE html>
<html lang="fr">
  <head>
  	<title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">

      <link rel="stylesheet" href="./Bootstrap/dist/css/bootstrap.min.css">
      <link rel="stylesheet" href="./Bootstrap/dist/css/bootstrap.css">
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
        <script src="./Bootstrap/Scripts/bootstrap.js" type="text/javascript"></script>
        <script type="text/javascript" src="http://twitter.github.com/bootstrap/assets/js/bootstrap-dropdown.js"></script>
        <script src="./Bootstrap/dist/js/bootstrap.min.js"></script>
        <script src="./Bootstrap/assets/js/bootswatch.js"></script>
        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
        <script src="../bower_components/bootstrap/assets/js/html5shiv.js"></script>
        <script src="../bower_components/bootstrap/assets/js/respond.min.js"></script>
        <![endif]-->
  </head>
              <div class="navbar navbar-default">
                <div class="container">
                  <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                    </button>
<<<<<<< HEAD
                    <a class="navbar-brand">Skemo</a>
=======
                    <a class="navbar-brand" href="">Skemo</a>
>>>>>>> f2ffdea5ef53ad83958677dd15b0b0538ab86a74
                  </div>
                  <div class="navbar-collapse collapse navbar-responsive-collapse">
                    <ul class="nav navbar-nav">
                      <?php
                      if(isset($active)){
<<<<<<< HEAD
                      if($active=='entities'){
                        print('
                      <li class="active"><a href="./entities">Entities</a></li>
                      <li ><a href="./posts">Posts</a></li>');}
                      if($active=='posts'){
                        print('
                      <li ><a href="./entities">Entities</a></li>
=======
                      if($active=='users'){
                        print('
                      <li class="active"><a href="./users">Users</a></li>
                      <li ><a href="./posts">Posts</a></li>');}
                      if($active=='posts'){
                        print('
                      <li ><a href="./users">Users</a></li>
>>>>>>> f2ffdea5ef53ad83958677dd15b0b0538ab86a74
                      <li class="active"><a href="./posts">Posts</a></li>');
                      }
                      if($active=='add'){
                        print('
<<<<<<< HEAD
                      <li ><a href="./entities">Entities</a></li>
=======
                      <li ><a href="./users">Users</a></li>
>>>>>>> f2ffdea5ef53ad83958677dd15b0b0538ab86a74
                      <li ><a href="./posts">Posts</a></li>');
                      }
                    }
                      ?>
                        <li class="dropdown">
                        <a href="" class="dropdown-toggle" data-toggle="dropdown" >Add <b class="caret"></b></a>
                        <ul class="dropdown-menu">
<<<<<<< HEAD
                        <li><a href="entities/new">Nouvelle entité</a></li>
                        <li><a href="posts/new">Nouveau post</a></li>
=======
                        <li><a href="users/new">New user</a></li>
                        <li><a href="posts/new">New post</a></li>
>>>>>>> f2ffdea5ef53ad83958677dd15b0b0538ab86a74
                        </ul>
                        </li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                  
                  </ul>
                  </div><!-- /.nav-collapse -->
                </div><!-- /.container -->
              </div><!-- /.navbar -->
    <body>
      @if(Session::has('message'))
      <p style="color: green">{{ Session::get('message') }}</p>
      @endif
      
        @section('content')
  
        @show
        @section('footer')


  </body>
  <footer style="text-align:left; padding-left:20px;">
    &copy; Copyright skdev.ch - BG
  </footer>
</html>
@show
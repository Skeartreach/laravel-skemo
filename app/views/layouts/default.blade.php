<!DOCTYPE html>
<html lang="fr">
  <head>
  	<title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <link rel="stylesheet" href="./Bootstrap/dist/css/bootstrap.css" media="screen">
    <link rel="stylesheet" href="../bower_components/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="./Bootstrap/dist/css/bootstrap.min.css">
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
                    <a class="navbar-brand" href="#">Skemo</a>
                  </div>
                  <div class="navbar-collapse collapse navbar-responsive-collapse">
                    <ul class="nav navbar-nav">
                      <li class="active"><a href="./users">Users</a></li>
                      <li><a href="./posts">Posts</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown" id="menuLogin">
                      <a class="dropdown-toggle" href="#" data-toggle="dropdown" id="navLogin">Login</a>
                      <div class="dropdown-menu" style="padding:17px;">
                        <form class="form" id="formLogin"> 
                          <input name="username" id="username" type="text" placeholder="Username"> 
                          <input name="password" id="password" type="password" placeholder="Password"><br>
                          <button type="button" id="btnLogin" class="btn">Login</button>
                        </form>
                      </div>
                    </li>
                  </ul>
                  </div><!-- /.nav-collapse -->
                </div><!-- /.container -->
              </div><!-- /.navbar -->
    <body>
        @section('content')
         
        @show
</body>
</html>
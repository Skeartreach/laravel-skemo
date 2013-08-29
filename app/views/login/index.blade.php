<!DOCTYPE html>
<html lang="fr">
  <head>
    <title>Skemo - Connexion</title>
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
                    <a class="navbar-brand">Skemo</a>
                  </div>
                </div><!-- /.container -->
              </div><!-- /.navbar -->

  <body>
      <div class="col-lg-2" style='margin-right: 40%; margin-left: 40%; margin-top: 8%;'>
          {{ Form::open(array('url' => 'login/check', 'method' => 'put' ,'class' => 'bs-example form-horizontal')) }}
                <fieldset>
                  <legend>Veuillez vous connecter</legend>  

                  <!--  name -->           
                  <div class="form-group">
                    <div class="col-lg-10">
                    {{ Form::text('frm_username','', array('class' => 'form-control','required' , 'placeholder'=>"Identifiant")) }}
                    </div>
                  </div>

                   <!--  email -->  
                   <div class="form-group">
                    <div class="col-lg-10">
                      {{ Form::password('frm_password', array('class' => 'form-control','required', 'placeholder'=>"Mot de passe" )) }}
                    </div>
                  </div>

                  <div class="form-group">
                    <center>
                      {{ Form::submit('Connexion',array('class' => 'btn btn-primary')) }}
                    </center>
                    </div>
                  </div>
                </fieldset>
              {{ Form::close() }}
      </div>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
  </body>
</html>

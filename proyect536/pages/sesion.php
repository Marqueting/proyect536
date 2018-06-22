<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Inicio de sesión</title>
  <link rel="icon" href="../assets/img/lock.png">
	<link rel="stylesheet" href="../assets/css/bootstrap.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/css/general.css">

    <script src="../assets/js/jquery-3.2.1.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <script type="text/javascript" src="../assets/js/tooltip.js"></script>
    <script type="text/javascript" src="../assets/js/selectUser.js"></script>

  <link href="https://fonts.googleapis.com/css?family=Fjalla+One|Julius+Sans+One|Open+Sans" rel="stylesheet"> 
</head>
<body>
  <div class="container">
    <div class="col-md-4 col-md-offset-4 col-xs-12 col-ms-10 form">
      <form action="../control/selectUser.php" method="POST">
        <div class="form-group">

          <!--<div id="info-success" class="alert alert-dismissible fade in" style="border-left: solid 5px #FEC606; background-color: white; border-radius: 0px;">
            <strong id="info"><i class="fas fa-exclamation-triangle"></i></strong>
          </div>-->
          
          <div class="form-group">
            <strong id="info" style="color: #fff; text-align: center;"></strong>
          </div>
        </div>
        <div class="form-group">
          <input type="text" id="user" name="user" class="form-control input-user" placeholder="Usuario" autofocus data-toggle="tooltip" data-placement="right" title="Ingrese usuario">
          <input type="password" id="pass" name="pass" class="form-control input-pass" placeholder="Contraseña" data-toggle="tooltip" data-placement="right" title="Ingrese contraseña">
        </div>
        <div class="form-group">
          <button type="button" id="entrar" class="btn btn-lg btn-primary btn-block" data-toggle="tooltip" data-placement="left" title="Haga click para ingresar al sistema">ENTRAR <i class="fas fa-sign-in-alt"></i></button>
          
        </div>
        <div class="form-group text-center">
          <div class="col-md-6 col-ms-6 col-xs-12">
            <a class="a-user" href="searchUser.php" data-toggle="tooltip" data-placement="left" title="Haga clic para recuperar contraseña">Olvide la contraseña</a>
          </div>
          <div class="col-md-6 col-ms-6 col-xs-12">
            <a class="a-user" href="#" data-toggle="tooltip" data-placement="righ" title="Haga click para desbloquear usuario">usuario bloqueado</a>
          </div>
         
        </div>
      </form>
    </div>
  </div>
</body>
</html>


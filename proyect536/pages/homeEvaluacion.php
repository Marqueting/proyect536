<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">

  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
 
</head>
<body style="background-color: #ECF0F1;">
  <nav class="navbar navbar-default" style="z-index: 100; background-color: white; border-radius: 0px;">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Evaluacion y merito</a>
    </div>
    <ul class="nav navbar-nav navbar-right">
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"><i class="fas fa-user"></i> 24019826 <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#"><i class="fas fa-user"></i> Perfil</a></li>
          <li><a href="#"><i class="fas fa-cog"></i> Configuración</a></li>
          <li><a href="#"><i class="fas fa-sign-out-alt"></i> Salir</a></li>
        </ul>
      </li>
    </ul>
  </div>
</nav>
  <div class="container-lateral">
    <div class="panel-group">
    <div class="panel panel-default" style="border-top-left-radius: 0px; border-top-right-radius: 0px;">
      <div class="panel-heading">
        <h4 class="panel-title font-menu">
          <a id="a-up" data-toggle="collapse" data-parent="#collapse0" href="#collapse0">
          <i class="fas fa-address-card"></i> Funcionario
          <i class="fas fa-chevron-down" style="float: right;"></i></a>
        </h4>
      </div>
      <div id="collapse0" class="panel-collapse collapse">
        <ul class="list-group font-menu">
          <li class="list-group-item font-menu2"><i class="fas fa-angle-right"></i> Nuevo</li>
          <li class="list-group-item font-menu2"><i class="fas fa-angle-right"></i> Evaluar</li>
          <li class="list-group-item font-menu2"><i class="fas fa-angle-right"></i> buscar</li>
        </ul>
      </div>
    </div>
    </div>
  </div>

  <div class="container">
    <div class="row">
      <div class="panel-group">
    <div class="panel panel-default" style="border-top-left-radius: 0px; border-top-right-radius: 0px;">
      <div class="panel-heading">
        <h4 class="panel-title font-menu">
          <a id="a-up" data-toggle="collapse" data-parent="#collapse0" href="#collapse0">
          <i class="fas fa-address-card"></i> Funcionario
          <i class="fas fa-chevron-down" style="float: right;"></i></a>
        </h4>
      </div>
      <div id="collapse0" class="panel-collapse collapse">
        <ul class="list-group font-menu">
          <li class="list-group-item font-menu2"><i class="fas fa-angle-right"></i> Nuevo</li>
          <li class="list-group-item font-menu2"><i class="fas fa-angle-right"></i> Evaluar</li>
          <li class="list-group-item font-menu2"><i class="fas fa-angle-right"></i> buscar</li>
        </ul>
      </div>
    </div>
    </div>
    </div>
  </div>

  <style>
  *{
    box-sizing: border-box;
    margin: 0px;
    padding: 0px;
  }
  .panel-title-style{
    border-radius: 0px;
    text-decoration: none;
  }
  .navbar{
    -webkit-box-shadow: 0px 3px 5px -1px rgba(0,0,0,0.77);
    -moz-box-shadow: 0px 3px 5px -1px rgba(0,0,0,0.77);
    box-shadow: 0px 3px 5px -1px rgba(0,0,0,0.77);
  }
    .container-lateral{
      position: fixed;
      bottom: 0px;
      width: 20%;
      height: 100%;
      padding: 70px 10px 10px 10px;
      background-color: #3B3C3D;
      
    }
    .font-menu{
      font-family: 'Montserrat', sans-serif;
    }
    .font-menu2:hover{
      padding-left: 10px;
      background-color: #E7E7E7;
    }
  </style>
</body>
</html>
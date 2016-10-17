<?php session_start(); ?>
<!DOCTYPE html>
<html lang="pl_PL">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>System Ekspertowy</title>
 
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <!-- Ikony -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet">
 
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    
    <nav class="navbar navbar-default" role="navigation">
      <div class="container-fluid">
        <!-- Grupowanie "marki" i przycisku rozwijania mobilnego menu -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Rozwiń nawigację</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">Home</a>
        </div>

        <!-- Grupowanie elementów menu w celu lepszego wyświetlania na urządzeniach moblinych -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Szukaj sprzętu... <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="offer.php">Komputery</a></li>
                <li class="disabled"><a href="#">Tablety</a></li>
                <li class="disabled"><a href="#">Komórki</a></li>
                <li class="disabled"><a href="#">Inne pierdoły</a></li>
              </ul>
            </li>
            <li><a href="about.php">O nas</a></li>
          </ul>
          
        </div><!-- /.navbar-collapse -->

      </div><!-- /.container-fluid -->
    </nav>

    <div class="container">
      
      <div class="page-header">
        <h1>O nas <small>czyli o twórcach tej strony</small></h1>
      </div>
      
      <div class="row">
        <div class="col-md-6 col-sm-6 col-xs-12">
          <div class="thumbnail">
            <img src="images/pic01.jpg" alt="...">
            <div class="caption">
              <h3 style="text-align: center;">Piter<h3>
              <p class="text-justify">Główny programista i pedofil xD (zdjęcie prawdziwe, on ma taki krzywy ryjek)</p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-sm-6 col-xs-12">
          <div class="thumbnail">
            <img src="images/pic01.jpg" alt="...">
            <div class="caption">
              <h3 style="text-align: center;">Damian<h3>
              <p class="text-justify">Młody, jeszcze nie wie, że Piter chce go wykorzystać</p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-sm-6 col-xs-12">
          <div class="thumbnail">
            <img src="images/pic01.jpg" alt="...">
            <div class="caption">
              <h3 style="text-align: center;">Katarzyna<h3>
              <p class="text-justify">Och, najwspanialszy członek zespołu. Same zalety, długo by wypisywać xD</p>
            </div>
          </div>
        </div>
      </div>

    </div>


 
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
  </body>
</html>
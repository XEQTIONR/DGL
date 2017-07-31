<!DOCTYPE html>

<!-- main.blade.php
@desc The common layout for every page
@author Ishtehar Hussain-->

<html lang="{{ app()->getLocale() }}">

<head>

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>DaGameLeague</title>


<!-- Fonts -->
<link href="https://fonts.googleapis.com/css?family=Titillium+Web:400,700" rel="stylesheet">

<!-- Bootstrap -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Styles -->
<link rel="stylesheet" type="text/css" href="css/app.css">

</head>

<body>
  <nav id="header" class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">

      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>


      <a class="navbar-brand" href="#">
        <img alt="Brand" src="img/site-1-a.png" height="80">
      </a>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-left">
        <li><a href="#">news</a></li>
        <li><a href="#">tournaments</a></li>
        <li><a href="#">Teams</a></li>
        <li><a href="#">Media</a></li>
        <li><a href="#">About</a></li>
        {{--<li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li>--}}
      </ul>

      <ul class="nav navbar-nav navbar-right">
        <li><a href="#">login</a></li>
        <li><a href="#">register</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div>
  </nav>

  <!-- Scripts -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>



</body>

</html>

<!DOCTYPE html>

<!-- main.blade.php
@desc The common layout for every page
@author Ishtehar Hussain-->

<html lang="{{ app()->getLocale() }}">

<head>
 <link rel="shortcut icon" type="image/x-icon" href="./img/favico.png" />
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>DaGameLeague</title>


<!-- Fonts -->
<link href="https://fonts.googleapis.com/css?family=Titillium+Web:400,700" rel="stylesheet">

<!-- Bootstrap -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Styles -->


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://code.jquery.com/ui/1.12.0/jquery-ui.min.js" integrity="sha256-eGE6blurk5sHj+rmkfsGYeKyZx3M4bG+ZlFyA7Kns7E=" crossorigin="anonymous"></script>

@yield('style')
<link rel="stylesheet" type="text/css" href="css/app.css">
</head>

<body>
  <nav id="header" class="navbar  navbar-fixed-top">
    @include('partials.main_menu')
  </nav>
  <div class="content">
    @yield('content')
  </div>
  <!-- Scripts -->

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>



</body>

</html>

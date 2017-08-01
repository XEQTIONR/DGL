@extends('layouts.main')

@section('style')
<style>
  .content{
    /*background-image: url('/img/mario2.png');
    background-size: 80px 60px;
    background-repeat: no-repeat;*/

  }

  #container{
    /*border: 1px solid red;*/
    position: relative;
    width: 500px;
    height: 75px;
    /*top: 30vh;
    left: 50vw;*/
  }

  #wrapper{
    /*border: 1px solid blue;*/
    position: relative;
    width: 700px;
  }
</style>

<script>

$(document).ready(function(){


  $("#wrapper").position({
    "my": "center middle",
    "at": "center middle",
    "of": window
  });

  $("#container").position({
    "my": "center middle",
    "at": "center middle",
    "of": window
  });

  $(".img").position({
    "my": "center middle",
    "at": "center middle",
    "of": $("#wrapper")
  });

  function nem8(){
    $(this).animate({opacity:0},2000);
  }


  function nem10(){
    $(this).animate({opacity:1},2000);
  }

  var i = 2;
  function loop(){
    i++;
    i = i%3;
    var elem = "#a" + i;
    var right= "#a" + ((i+1)%3);
    var left= "#a" + ((i+2)%3);

    var text = left + " " + elem + " " + right;
    $("#lbl").html(text);
    //$(elem).animate({opacity:1});
    //$(elem).css("border", "1px solid green");
    $(elem).position({
      "my": "center middle",
      "at": "center middle",
      "of": window,
      "using": nem10,
      "collision" : "flip",
      "within" : "#wrapper"
    });
    //$(elem).delay(500).animate({opacity:1},500);

    $(right).position({
      "my": "left middle",
      "at": "right middle",
      "of": "#container",
      "using" : nem8,
      "collision" : "flip",
      "within" : "#wrapper"
    });
    //$(right).delay(500).animate({opacity:0},500);

    $(left).position({
      "my": "right middle",
      "at": "left middle",
      "of": "#container",
      "using" : nem8,
      "collision" : "flip",
      "within" : "#wrapper"
    });
    //$(left).delay(500).animate({opacity:0},500, function(){loop()});
    setTimeout(function() {
      loop();
    }, 7000);
  }
  $("#prev").click(function(){
    loop();
  });
  loop();
});

</script>
@endsection
@section('content')

<div class="container">

{{--<div class="row">
  <img class="center-block" src="./img/mario.png" width="500">
</div>--}}
<div class="row" style="margin-top: 55vh">


</div>
<div class="row">

<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
  <h1 class="text-center" style="">Online competitive e-sports leagues and tournaments.</h1>
</div>

</div>
<div class="row">
  <h3 class="text-center gray-text">Pro e-sport tournaments. Online Registrations.<h3>
</div>



<div class="footer navbar-fixed-bottom">
  <h4 class="text-center white-text text-uppercase">Learn More </h4>
  <h5 class="text-center"><span class="glyphicon glyphicon-chevron-down  white-text" aria-hidden="true"></h5>
</div>
</div>

<div id="wrapper">
  <img class="img" id="a0" src="./img/dacrown-sm-a.png" width ="100">
  <img class="img" id="a1" src="./img/icons8-Joystick.png" width ="100">
  <img class="img" id="a2" src="./img/icons8-Nintendo Without Card.png" width ="100">
<div id="container"></div>
</div>



@endsection

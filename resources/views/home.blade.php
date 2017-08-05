@extends('layouts.main')

@section('style')
<style>
  .content{
    /*background-image: url('/img/mario2.png');
    background-size: 80px 60px;
    background-repeat: no-repeat;*/

  }

  #wrapper{
    /*border: 1px solid blue;*/
    position: relative;
    max-width: 700px;
  }

</style>

<script>

function positioning(){
/*$("#wrapper").position({
  "my": "center bottom",
  "at": "center top",
  "of": "#heading"
});*/



$(".img").position({
  "my": "center middle",
  "at": "center middle",
  "of": $("#wrapper")
});
}

$(document).ready(function(){

  $("#mission").hide();
  $("#footer").hide();
  $(".learn").css("cursor", "pointer");

  $(".learn").click(function(){
    $("#mission").show();
    $("#footer").show();
    $("#banner").slideUp();

  });


  function nem8(){
    $(this).animate({opacity:0},1500);
  }


  function nem10(){
    $(this).animate({opacity:1},1500);
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
      "of": "#wrapper",
      "using": nem10,
      "collision" : "flip",
      "within" : "#wrapper"
    });
    //$(elem).delay(500).animate({opacity:1},500);

    $(right).position({
      "my": "right middle",
      "at": "right middle",
      "of": "#wrapper",
      "using" : nem8,
      "collision" : "flip",
      "within" : "#wrapper"
    });
    //$(right).delay(500).animate({opacity:0},500);

    $(left).position({
      "my": "left middle",
      "at": "left middle",
      "of": "#wrapper",
      "using" : nem8,
      "collision" : "flip",
      "within" : "#wrapper"
    });
    //$(left).delay(500).animate({opacity:0},500, function(){loop()});
    setTimeout(function() {
      loop();
    }, 4000);
  }

  positioning();
  loop();
});

$(window).on("resize", function(){
  positioning();
});

</script>

@endsection
@section('content')

<div id="banner" class="container" style="height: 100vh;">

<div class="row" style="margin-top: 40vh">


</div>

<div class="row">
  <div class="col-md-4 col-md-offset-4" id="wrapper">
    <img class="img" id="a0" src="./img/dacrown-md-a.png" width ="100">
    <img class="img" id="a1" src="./img/icons8-Joystick.png" width ="100" style="opacity: 0;">
    <img class="img" id="a2" src="./img/icons8-Nintendo Without Card.png" width ="100" style="opacity: 0;">

  </div>
</div>
<div class="row" id="heading">

<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
  <h1 class="text-center" style="">Online competitive e-sports leagues and tournaments.</h1>
</div>

</div>
<div class="row">
  <h3 class="text-center gray-text">Site currently under construction. Not all features may work.<h3>
</div>



<div class="footer navbar-fixed-bottom">
  <h4 class="learn text-center white-text text-uppercase">Learn More </h4>
  <h5 class="learn text-center"><span class="glyphicon glyphicon-chevron-down  white-text" aria-hidden="true"></h5>
</div>

</div>


@include('partials.mission')
@include('partials.footer')

@endsection

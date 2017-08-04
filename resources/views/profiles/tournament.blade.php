@extends('layouts.main')

@section('style')

  <script>
   $(document).ready(function(){

     $("#rules").hide();
     $("#reg").hide();

     $(".s-select").click(function(){
       $(".s-select").removeClass("active");
       $(this).addClass("active");
      // $("html, body").animate({ scrollTop: $(document).height() }, 1000);
     });

     $("#li-info").click(function(){
       $(".s-row").hide();
       $("#info").show();
     });

     $("#li-rules").click(function(){
       $(".s-row").hide();
       $("#rules").show();

     });

     $("#li-reg").click(function(){
       $(".s-row").hide();
       $("#reg").show();
     });


   });
  </script>
@endsection

@section('content')

  <div class="container">

    <div class="row">
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">

      <!-- Wrapper for slides -->
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img src="img/sombra.jpg" alt="https://google.com/sombra">
          <div class="carousel-caption">
            <h1>SOMBRA DOTS</h1>
          </div>
        </div>
      </div>

    </div>
    </div>
  </div>

<div class="light-background" style="width: 100%;">
<div class="container">
  <div class="row">
      <div class="col-md-12" style="margin-top: 2em;">

          <ul class="nav nav-pills nav-dgl" role="navigation">
              <li role="presentation" class="s-select active text-center" id="li-info"><a href="#">INFORMATION</a></li>
              <li role="presentation" class="s-select text-center" id="li-rules"><a href="#">RULES</a></li>
              <li role="presentation" class="s-select text-center" id="li-reg"><a href="#">REGISTRATION</a></li>
          </ul>


      </div>
  </div>
  <div class="row s-row" id="info">
      <div class="col-md-12">
        <div class="row  ">
          <h2 class="text-center"> TOURNAMENT INFORMATION</h2>
        </div>

        <div class="row">
          <p>Some Lorem ipsum text that i need for now.</p>
        </div>
      </div>
  </div>

  <div class="row s-row" id="rules">
      <div class="col-md-12">
        <div class="row  ">
          <h2 class="text-center"> TOURNAMENT RULES</h2>
        </div>

        <div class="row">
          <p>Some Lorem ipsum text that i need for now.</p>
        </div>
      </div>
  </div>

  <div class="row s-row" id="reg">
      <div class="col-md-12">
        <div class="row  ">
          <h2 class="text-center"> TOURNAMENT REGISTRATION</h2>
        </div>

        <div class="row">
          <p>Some Lorem ipsum text that i need for now.</p>
        </div>
      </div>
  </div>
</div>
</div>

@endsection

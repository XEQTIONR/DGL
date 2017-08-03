@extends('layouts.main')


@section('style')
<script>
  $(document).ready(function(){
    $(".item").click(function(){
      var value = $(this).children("img").attr("alt");
      window.location.replace(value);
      //alert(value);
    });
  });
</script>
@endsection
@section('content')


<div class="container">
  <div class="row">
  <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
      <li data-target="#carousel-example-generic" data-slide-to="1"></li>
      <li data-target="#carousel-example-generic" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="img/sombra.jpg" alt="https://google.com/sombra">
        <div class="carousel-caption">
          SOMBRA DOTS
        </div>
      </div>
      <div class="item">
        <img src="img/dva.jpg" alt="https://google.dva/">
        <div class="carousel-caption">
          DVA DOTS
        </div>
      </div>
      <div class="item">
        <img src="img/tracer.png" alt="https://google.com/tracer">
        <div class="carousel-caption">
          TRACER DOTS
        </div>
      </div>
    </div>

    <!-- Controls -->
    <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
  </div>
</div>
<div class="light-background" style="width: 100%; margin-top: 1em;">
<div class="container">
  <div class="row">

    <div class="col-md-9"> {{--tournament info--}}
      <div class="row"> {{--current-tournaments--}}
        <div class="col-md-12">
          <div class="row">
            <h3><strong>CURRENT TOURNAMENT</strong></h3>
          </div>
          @include('partials.blog_entry', ['title' =>"The title of the sombra tournament",
                                            'desc'=>"Some kind of description about the sombra tournament.",
                                            'img' =>"img/sombra.jpg"])


        </div>
      </div>

      <div class="row"><hr></div>

      <div class="row">{{--upcoming-tournaments--}}
        <div class="col-md-12">
          <div class="row">
            <h3><strong>UPCOMING TOURNAMENTS</strong></h3>
          </div>

          @include('partials.blog_entry', ['title' =>"The title of the sombra tournament",
                                            'desc'=>"Some kind of description about the sombra tournament.",
                                            'img' =>"img/dva.jpg"])

          @include('partials.blog_entry', ['title' =>"The title of the sombra tournament",
                                            'desc'=>"Some kind of description about the sombra tournament.",
                                            'img' =>"img/tracer.png"])

        </div>
      </div>

      <div class="row"><hr></div>

      <div class="row">{{--past-tournaments--}}
        <div class="col-md-12">
          <div class="row">
            <h3><strong>PAST TOURNAMENT</strong></h3>
          </div>

          @include('partials.blog_entry', ['title' =>"The title of the sombra tournament",
                                            'desc'=>"Some kind of description about the sombra tournament.",
                                            'img' =>"img/tracer.png"])

        </div>
      </div>
    </div>

    <div class="col-md-3"> {{--side-bar--}}
      <div class="row"> {{--scoreboard--}}
        <div class="card" id="scoreboard">
        </div>
      </div>

      <div class="row"> {{--results--}}
        <div class="card" id="results">
        </div>
      </div>
      <div class="row"> {{--fixtures--}}
        <div class="card" id="fixtures">
        </div>
      </div>
    </div>

  </div>

</div>
</div>
@include('partials.footer')
@endsection

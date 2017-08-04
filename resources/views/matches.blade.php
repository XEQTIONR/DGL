@extends('layouts.main')

@section('content')
<div class="light-background" style="width: 100%; margin-top: 75px;">
<div class="container">
  <div class="page-header">
    <h2>Matches <small>Fixtures and Results</small></h2>
  </div>
</div>
</div>
<div class="white-background" style="width: 100%;">
<div class="container">
<div class="row">
  <div class="col-md-12">
    <div class="row"><h3><strong>Fixtures</strong></h3></div>
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
      <table class="table table-hover table-condensed">
        <tr>
          <td>A</td>
          <td>vs</td>
          <td>B</td>
          <td>Tourney name</td>
          <td>19 Aug 2017 18:80 BST</td>
          <td><a class="btn btn-dgl btn-xs btn-block">INFO</a></td>
        </tr>
        <tr>
          <td>C</td>
          <td>vs</td>
          <td>D</td>
          <td>Tourney name</td>
          <td>19 Aug 2017 18:80 BST</td>
          <td><a class="btn btn-dgl btn-xs btn-block">INFO</a></td>
        </tr>
      </table>
      </div>
    </div>
  </div>
</div>

<div class="row">
  <div class="col-md-12">
    <div class="row"><h3><strong>Results</strong></h3></div>
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
      <table class="table table-hover table-condensed">
        <tr>
          <td>A</td>
          <td>3:2</td>
          <td>B</td>
          <td>Tourney name</td>
          <td>19 Aug 2017 18:80 BST</td>
          <td><a class="btn btn-dgl btn-xs btn-block">Hide Results</a></td>
          <td><a class="btn btn-dgl btn-xs btn-block">INFO</a></td>
        </tr>
        <tr>
          <td>C</td>
          <td>vs</td>
          <td>D</td>
          <td>Tourney name</td>
          <td>19 Aug 2017 18:80 BST</td>
          <td><a class="btn btn-dgl btn-xs btn-block" >Show Results</a></td>
          <td><a class="btn btn-dgl btn-xs btn-block" >INFO</a></td>
        </tr>
      </table>
      </div>
    </div>
  </div>
</div>

</div>
</div>

@include('partials.footer')
@endsection

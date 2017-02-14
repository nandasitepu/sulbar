@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="/css/welcome.css">
@endsection
@include('layouts._navtop')
@section('content')
  <!-- Full Page Image Background Carousel Header -->
  <div id="myCarousel" class="carousel slide">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for Slides -->
    <div class="carousel-inner">
      <div class="item active">
        <!-- Set the first background image using inline CSS below. -->
        <div class="fill" style="background-image:url(../img/sulbar1.jpg);"></div>
      </div>
      <div class="item">
        <!-- Set the second background image using inline CSS below. -->
        <div class="fill" style="background-image:url('../img/sulbar2.jpg');"></div>
      </div>
      <div class="item">
        <!-- Set the third background image using inline CSS below. -->
        <div class="fill" style="background-image:url('../img/sulbar3.jpg');"></div>
      </div>
    </div>

    <!-- Controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <i class="fa fa-angle-double-left fa-2x" aria-hidden="true"></i>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <i class="fa fa-angle-double-right fa-2x" aria-hidden="true"></i>
    </a>
  </div>
  <!-- CONTENT -->
  <div class="container main-text">
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <h1 class="label label-primary">Provinsi Sulawesi Barat</h1>
        <div class="text-center btn btn-default btn-block">

          <h3><u><i>"Mellete Diatonganan"</i></u></h3>
          <small>Meniti di Atas Kebenaran</small>
        </div>
          <hr>
        <div class="hidden-xs">
          <div class="btn-group btn-group-justified">
            <a href="#" class="btn btn-default btn-sm">Berita</a>
            <a href="#" class="btn btn-default btn-sm">Wisata</a>
            <a href="#" class="btn btn-default btn-sm">Souvenir</a>
            <a href="#" class="btn btn-default btn-sm">Pemerintah</a>
            <a href="#" class="btn btn-default btn-sm">Swasta</a>
          </div>
        </div>
        <hr>

          <div class="col-md-8 col-md-offset-2 input-group">
            <input type="text" class="form-control text-center  " aria-label="Search" placeholder="... Cari Apa Ki ? ...">
            <div class="input-group-btn">
              <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-search" aria-hidden="true">&nbsp; <label class="searchbox"></label></i>
                <span class="caret"></span>
              </button>
              <ul class="dropdown-menu dropdown-menu-right">
                <li><a href="#">Tags</a></li>
                <li><a href="#">Berita</a></li>
                <li><a href="#">Data</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="#">Go to Search Page</a></li>
              </ul>
            </div><!-- /btn-group -->
          </div><!-- /input-group --> <!-- Search BOX -->
          <div class="text-center">
            <div class="btn-group lato">
              <br>
              <div class="col-xs-12">
                <a href="#"  class="btn btn-default btn-sm">
                  <i class="fa fa-lightbulb-o" aria-hidden="true"></i>&nbsp; User &nbsp; <span class="label label-primary count">100</span>
                </a>
                <a href="#"   class="btn btn-default btn-sm">
                  <i class="fa fa-road" aria-hidden="true"></i>&nbsp; Artikel  &nbsp;<span class="label label-success count">267</span>
                </a>
                <a href="#list"  class="btn btn-default btn-sm">
                  <i class="fa fa-money" aria-hidden="true"></i>&nbsp; Komentar &nbsp;<span class="label label-warning count">123</span>
                </a>
                <a href="#list"   class="btn btn-default btn-sm">
                  <i class="fa fa-map-signs" aria-hidden="true"></i>&nbsp; Kunjungan &nbsp; <span class="label label-danger count">4005</span>
                </a>

              </div>
            </div>
          </div>
          <div class="Tombol Masuk">
            <br>
            <br>
            <br>
            <p class="text-center">
              <a href="{{url('dashboard')}}" class="btn btn-primary btn-md">
                <span>Masuk</span>&nbsp;
                <i class="fa fa-fw fa-sign-in" aria-hidden="true"></i>
              </a>
            </p>
          </div>
      </div>
    </div>
  </div>
@endsection
@section('js')
  <script type="text/javascript">
  $(document).ready(function () {
    $('.count').each(function () {
      $(this).prop('Counter',0).animate({
          Counter: $(this).text()
      }, {
          duration: 5000,
          easing: 'swing',
          step: function (now) {
              $(this).text(Math.ceil(now));
          }
      });
    });
  });
  </script>
@endsection
@include('layouts._navbot')

@extends('layouts.code')

@section('content')

<section class="hero-wrap hero-wrap-2" style="background-image: url('images/teacher3.jpg');">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text align-items-center justify-content-center">
        <div class="col-md-9 ftco-animate text-center">
          <h1 class="mb-2 bread">Kurslar</h1>
          <p class="breadcrumbs"><span class="mr-2"><a href="/">Asosiy <i class="ion-ios-arrow-forward"></i></a></span> <span>Kurslar <i class="ion-ios-arrow-forward"></i></span></p>
        </div>
      </div>
    </div>
  </section>

  <section class="ftco-section">
    <div class="container">
        <div class="row">
            @include('courses.coursespart')
        </div>
    </div>
</section>
@endsection

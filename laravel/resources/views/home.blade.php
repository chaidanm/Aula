@extends('layout')
@section('Conteudo')



<div class="row flex-lg-row-reverse align-items-center g-5 py-5">
      <div class="col-10 col-sm-8 col-lg-6">
        <img src="barbearia.jpg" class="d-block mx-lg-auto img-fluid" alt="BARBERSHOP" width="700" height="500" loading="lazy">
      </div>
      <div class="col-lg-6">
        <h1 class="display-5 fw-bold text-body-emphasis lh-1 mb-3">Bem Vindo a BERBERSHOP </h1>
        <p class="lead">A sua barbearia em Caxias!</p>
        <div class="d-grid gap-2 d-md-flex justify-content-md-start">
          <a href="/agenda" class="btn btn-primary btn-lg px-4 me-md-2">Agende seu Horario!</a>

        </div>
      </div>
    </div>

        <div class="row">

        <div id="carouselExample" class="carousel slide">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="c01.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="c02.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="c03.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

        </div>


@endsection

@extends('layouts.app')

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @section('header')

    <div id="carouselExampleIndicators" class="carousel slide">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="https://s3.ticketmx.com/uploads/images/4f189f6d940c7dccb60d841b5b8272686713f7e1.png?w=1920&h=700&mode=crop&bgcolor=black&format=jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="https://s3.ticketmx.com/uploads/images/2988a10fa05b8f8ad03bd15d407fb439ffc6a9ca.png?w=1920&h=700&mode=crop&bgcolor=black&format=jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="https://s3.ticketmx.com/uploads/images/fbf36902eac5c70fce065c3b4d798a07c4d9ab09.png?w=1920&h=700&mode=crop&bgcolor=black&format=jpg" class="d-block w-100" alt="...">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>

    @endsection
    @section('content')
    <div class="container">

<div class="row">
  @foreach ($eventkey as $item)
    <div class="col-md-3 mt-4">
        <div class="card" style="height: 30rem;">
          <img src='{{$item->img}}' class="card-img-top" alt="" style="width:260px; height:260px; object-fit: cover" />
          <div class="card-body">
            <h5 class="card-title ">{{$item->title}}</h5>
            <p class="card-text">{{$item->text}}</p>
            <a href="checkout/{{$item->id}}" class="btn btn-secondary">Buy Tickets</a>
          </div>
        </div>
    </div>
    @endforeach
</div>
    @endsection
</body>

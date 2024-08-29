@extends('layouts.app')

@section('title', 'main')

@section('content')

<h1 class="text-center mt-4 mb-4">Выберите авто</h1>

<div class="container ">
    <div class="row ">
      <div class="col-lg gy-3">
        <form action="/user/{id}" method="get">
          @csrf
        <div class="card mx-auto" style="width: 50%;">
          <input type="hidden" name="brand_name" value="Hyundai Solaris">
          <input type="hidden" name="run" value="50000">
          <input type="hidden" name="price" value="2600">
            <img src="public/img/hyundai-solaris.jpg" class="card-img-top" alt="avto 1">
            <div class="card-body">
              <h5 class="card-title">Hyundai Solaris</h5>
              <ul class="list-group list-group-flush">
                <li class="list-group-item">Пробег: 50 000 км</li>
                <li class="list-group-item">Цена р/с: 2600</li>
              </ul>
              <button type="submit" class="btn btn-primary">Забронировать</button>
            </div>
          </div>
        </form>
      </div>
      <div class="col-lg gy-3">
        <form action="/user/{id}" method="get">
          @csrf
        <div class="card mx-auto" style="width: 50%;">
          <input type="hidden" name="brand_name" value="Kia Rio">
          <input type="hidden" name="run" value="10000">
          <input type="hidden" name="price" value="2500">
            <img src="public/img/kia-rio.jpg" class="card-img-top" alt="avto 2">
            <div class="card-body">
              <h5 class="card-title">Kia Rio</h5>
              <ul class="list-group list-group-flush">
                <li class="list-group-item">Пробег: 10 000 км</li>
                <li class="list-group-item">Цена р/с: 2500</li>
              </ul>
              <button type="submit" class="btn btn-primary">Забронировать</button>
            </div>
          </div>
          </form>
      </div>

    </div>
    <div class="row">
        <div class="col-lg gy-3">
          <form action="/user/{id}" method="get">
            @csrf
            <div class="card mx-auto" style="width: 50%;">
              <input type="hidden" name="brand_name" value="Skoda Octavia">
              <input type="hidden" name="run" value="13000">
              <input type="hidden" name="price" value="2000">
                <img src="public/img/skoda-octavia.jpg" class="card-img-top" alt="avto 3">
                <div class="card-body">
                  <h5 class="card-title">Skoda Octavia</h5>
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item">Пробег: 13 000 км</li>
                    <li class="list-group-item">Цена р/с: 2000</li>
                  </ul>
                  <button type="submit" class="btn btn-primary">Забронировать</button>
                </div>
              </div>
            </form>
        </div>
        <div class="col-lg gy-3">
          <form action="/user/{id}" method="get">
            @csrf
            <div class="card mx-auto" style="width: 50%;">
              <input type="hidden" name="brand_name" value="Skoda Rapid">
              <input type="hidden" name="run" value="45612">
              <input type="hidden" name="price" value="2700">
                <img src="public/img/skoda-rapid.jpg" class="card-img-top" alt="avto 4">
                <div class="card-body">
                  <h5 class="card-title">Skoda Rapid</h5>
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item">Пробег: 45 612</li>
                    <li class="list-group-item">Цена р/с: 2700</li>
                  </ul>
                  <button type="submit" class="btn btn-primary">Забронировать</button>
                </div>
              </div>
              </form>
        </div>

      </div>
      <div class="row">
        <div class="col-lg gy-3">
          <form action="/user/{id}" method="get">
          @csrf
            <div class="card mx-auto" style="width: 50%;">
              <input type="hidden" name="brand_name" value="VW Jetta">
              <input type="hidden" name="run" value="65 000">
              <input type="hidden" name="price" value="3200">
                <img src="public/img/vw-jetta.jpg" class="card-img-top" alt="avto 5">
                <div class="card-body">
                  <h5 class="card-title">VW Jetta</h5>
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item">Пробег: 65 000</li>
                    <li class="list-group-item">Цена р/с: 3200</li>
                  </ul>
                  <button type="submit" class="btn btn-primary">Забронировать</button>
                </div>
              </div>
              </form>
        </div>

        <div class="col-lg"></div>


      </div>
  </div>


@endsection

@extends('layouts.app')
@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-4 order-md-2 mb-4">
      <h4 class="d-flex justify-content-between align-items-center mb-3">
        <span class="text-muted">بيانات الطلب</span>
        <span class="badge badge-secondary badge-pill">3</span>
      </h4>
      @foreach ($eventkey as $item)
      <ul class="list-group mb-3">
        <li class="list-group-item d-flex justify-content-between lh-condensed">
          <div>
            <h6 class="my-0">{{$item->title}}</h6>
            <small class="text-muted">{{$item->text}}</small>
          </div>
        </li>
        <li class="list-group-item d-flex justify-content-between lh-condensed">
          <div>
            <h6 class="my-0">التاريخ</h6>
            <small class="text-muted">{{$item->eventDate}}</small>
          </div>
        </li>
        <li class="list-group-item d-flex justify-content-between lh-condensed">
          <div>
            <h6 class="my-0">المدينة</h6>
            <small class="text-muted">{{$item->city}}</small>
          </div>
        </li>
        <li class="list-group-item d-flex justify-content-between">
          <span>سعر التذكرة</span>
          <strong>ريال {{$item->price}}</strong>
        </li>
      </ul>
    </div>
    <div class="col-md-8 order-md-1">
        <img class="card-img-top rounded" src='{{$item->img}}' alt="" style="object-fit: cover; width: 100%; height: 300px;" />
        @endforeach
        <h2 class="mb-3 mt-4 text-dark">اتمام الطلب</h2>
      <form action="{{route('invoice')}}" method="GET">
        <div class="form-group">
          <label for="inputName">الاسم الثلاثي</label>
          <input type="text" class="form-control" id="inputName" name="inputName" placeholder="ادخل الاسم الثلاثي">
        </div>
        <div class="form-group">
          <label for="inputName">رقم الهاتف</label>
          <input type="text" class="form-control" id="inputPhone" name="inputPhone" placeholder="ادخل رقم الهاتف">
        </div>
        <div class="form-group">
          <label for="inputEmail1">الايميل</label>
          <input type="email" class="form-control" id="inputEmail" name="inputEmail" placeholder="ادخل الايميل">
          <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
    <div>
        <button type="submit" class="btn btn-primary mt-4">Submit</button>

        <input type="hidden" id="title" name="title" value="{{$item->title}}">
        <input type="hidden" id="text" name="text" value="{{$item->text}}">
        <input type="hidden" id="price" name="price" value="{{$item->price}}">
        <input type="hidden" id="date" name="date" value="{{$item->eventDate}}">
        <input type="hidden" id="city" name="city" value="{{$item->city}}">
      </form>
    </div>
  </div>
</div>
@endsection

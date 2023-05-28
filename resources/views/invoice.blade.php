@extends('layouts.app')  
@section('content')

<div class="container">

    <div class="card">
        <div class="card-body mx-4">
          <div class="container">
            <p class="my-5 mx-5 text-center" style="font-size: 30px;">تم انشاء التذكرة</p>
            <div class="row">
              <ul class="list-unstyled">
                <li  class="text-black"><h4>{{$invoice->fullName}}</h4></li>
                <p>#{{$invoice->id}}  رقم التذكرة</p>
                <li class="text-black mt-1"></li>
              </ul>
              <hr>
              <div class="col-xl-10">
                <h4>{{$invoice->title}}</h4>
                {{$invoice->text}}
              </div>
              <div class="col-xl-2">
                <p class="float-end"> 
                </p>
              </div>
              <hr>
            </div>
            <div class="row">
              <div class="col-xl-10">
                <p>التاريخ</p>
              </div>
              <div class="col-xl-2">
                <p class="float-end">{{$invoice->date}}
                </p>
              </div>
              <hr>
            </div>
            <div class="row">
              <div class="col-xl-10">
                <p>المدينة</p>
              </div>
              <div class="col-xl-2">
                <p class="float-end">{{$invoice->city}}
                </p>
              </div>
              <hr style="border: 2px solid black;">
            </div>
            <div class="row text-black">
      
              <div class="col-xl-12">
                <p class="float-end fw-bold">ريال {{$invoice->price}}
                </p>
              </div>
              <hr style="border: 2px solid black;">
            </div>

      
          </div>
        </div>
      </div>


</div>

@endsection

@extends('layouts.app')

@section('content')

<div class="sidenav">
  <a href="/index">Index</a>
  <a href="#clients">Clients</a>
  <a href="#contact">Contact</a>
</div>

<div class="row container mx-auto">
<img src="{{asset('img_3.jpg')}}" class="img-fluid mb-4" alt="" style="width:94%; margin-left:3%;">
<div class="col-12">
  <div class="container-fluid">
    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <div calss="card-body" style="background-color:#00A9A5;color:white;">
                    <h3 class="text-center p-3">150</h3>
                    <h5 class="pl-2">Total Owners</h5>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div calss="card-body" style="background-color:#6969B3;color:white;">
                    <h3 class="text-center p-3">15</h3>
                    <h5 class="pl-2">States Covered</h5>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div calss="card-body" style="background-color:#62466B;color:white;">
                    <h3 class="text-center p-3">10,000</h3>
                    <h5 class="pl-2">Records</h5>
                </div>
            </div>
        </div>
    </div>
  </div>
  </div>
</div>
</div>
@endsection
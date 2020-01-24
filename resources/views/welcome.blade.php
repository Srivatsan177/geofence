@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col-md-2" style="background-color:#204a84;">
        @include('admin.inc.sidebar')
    </div>

<div class="col-9">
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
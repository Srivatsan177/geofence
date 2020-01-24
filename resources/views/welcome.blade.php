@extends('layouts.app')

@section('content')

<style>

.overview-wrap {
  display: -webkit-box;
  display: -webkit-flex;
  display: -moz-box;
  display: -ms-flexbox;
  display: flex;
  justify-content: space-between;

  align-items: center;
}

.overview-item {
  -webkit-border-radius: 10px;
  -moz-border-radius: 10px;
  border-radius: 10px;
  padding: 30px;
  padding-bottom: 0;
  -webkit-box-shadow: 0px 2px 5px 0px rgba(0, 0, 0, 0.1);
  -moz-box-shadow: 0px 2px 5px 0px rgba(0, 0, 0, 0.1);
  box-shadow: 0px 2px 5px 0px rgba(0, 0, 0, 0.1);
  margin-bottom: 40px;
}

.overview-box .icon {
  display: inline-block;
  vertical-align: top;
  margin-right: 15px;
}

.overview-box .icon i {
  font-size: 60px;
  color: #fff;
}

.overview-item--c1 {
  background-image: -moz-linear-gradient(90deg, #3f5efb 0%, #fc466b 100%);
  background-image: -webkit-linear-gradient(90deg, #3f5efb 0%, #fc466b 100%);
  background-image: -ms-linear-gradient(90deg, #3f5efb 0%, #fc466b 100%);
}

.overview-item--c2 {
  background-image: -moz-linear-gradient(90deg, #11998e 0%, #38ef7d 100%);
  background-image: -webkit-linear-gradient(90deg, #11998e 0%, #38ef7d 100%);
  background-image: -ms-linear-gradient(90deg, #11998e 0%, #38ef7d 100%);
}

.overview-item--c3 {
  background-image: -moz-linear-gradient(90deg, #ee0979 0%, #ff6a00 100%);
  background-image: -webkit-linear-gradient(90deg, #ee0979 0%, #ff6a00 100%);
  background-image: -ms-linear-gradient(90deg, #ee0979 0%, #ff6a00 100%);
}

.overview-item--c4 {
  background-image: -moz-linear-gradient(90deg, #45b649 0%, #dce35b 100%);
  background-image: -webkit-linear-gradient(90deg, #45b649 0%, #dce35b 100%);
  background-image: -ms-linear-gradient(90deg, #45b649 0%, #dce35b 100%);
}


</style>
<div class="container-fluid">
<div class="container">
  <h2>Carousel Example</h2>  
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="{{asset("img_1.jpg")}}" alt="Los Angeles" style="width:100%;">
      </div>

      <div class="item">
        <img src="{{asset("img_2.jpg")}}" alt="Chicago" style="width:100%;">
      </div>
    
      <div class="item">
        <img src="{{asset("img_3.jpg")}}" alt="New york" style="width:100%;">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

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
@endsection
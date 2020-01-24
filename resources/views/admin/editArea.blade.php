@extends('layouts.app')

@section('content')
    <div class="container jumbotron">
        <form class="form-group" action="{{action("AdminController@updateArea",$area->id)}}" method="POST">
            @csrf
            <div class="form-group">
                <label>Soil Type</label>
                <input type="text" name="soil" value="{{$area->soil}}" class="form-control" placeholder="Soil Type">
            </div>
            <div class="form-group">
                <label>Ground Water Leve</label>
                <input type="text" name="ground_water" value="{{$area->ground_water}}" class="form-control" placeholder="Ground Water Level">
            </div>
            <div class="form-group">
                <label>Fertility</label>
                <input type="text" name="fertility" value="{{$area->fertility}}" class="form-control" placeholder="Fertility Of Soil">
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary">
            </div>
        </form>
    </div>
@endsection
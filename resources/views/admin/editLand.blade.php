@extends('layouts.app')

@section('content')
    <div class="container jumbotron">
        <form action="{{action('AdminController@updateLand',$land->id)}}" method="POST">
            @csrf
            <div class="form-group">
                <label>Enter New Reg. Number</label>
                <input type="text" name="reg_no" class="form-control" value="{{$land->reg_no}}">
            </div>
            <div class="form-group">
                <label>Enter Owner Email ID</label>
                <input type="text" name="email" class="form-control" value="{{$land->owner->email}}">
            </div>
            <div class="form-group">
                <label>Owner Name</label>
                <input type="text" name="name" class="form-control" value="{{$land->name}}">
            </div>
            <div class='form-group'>
                <input type="submit" class="btn btn-primary">
            </div>
        </form>
    </div>
@endsection
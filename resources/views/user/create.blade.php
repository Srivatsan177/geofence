@extends('layouts.app')

@section('content')

<div class="container">
    <div class="jumbotron">
        <form action="{{action('UsersController@store')}}" method="POST">
            @csrf
            <div class="form-group">
                <label for="year">Enter year : </label>
                <input type="number" class="form-control" name='year'>
            </div>

            <div class="form-group">
                <label for="crop_name">Enter crop : </label>
                <input type="text" class="form-control" name="crop_name">
            </div>
           
            <!-- <div class="dropdown">
            <button type="button" class="btn btn-light dropdown-toggle" data-toggle="dropdown">
                
            </button> -->
            <select name="quarter_num" class="btn btn-light dropdown-toggle">
                <option value="1"  >January - March</option>
                <option value="2"  >April - June</option>
                <option value="3"  >July - September</option>
                <option value="4"  >October - December</option>
            </select>
            
            </div>
            <div class="form-group mt-3">
                <button type="submit" class="btn-primary">Submit</button>
            </div>


        </form>
    </div>
</div>
@endsection
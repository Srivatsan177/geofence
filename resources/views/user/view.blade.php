@extends('layouts.app')

@section('content')
<div class="container">
    <h1>{{$user->name}}</h1>
    <table class="table table-bordered table-hover">
        <tr>
            <th>Registration Number</th>
            
        </tr>
        @foreach ($lands as $land)
        <tr>
            <td><a href="/user/view/crop/{{$land->id}}">{{$land->reg_no}}</a></td>

        </tr>
        @endforeach
    </table>
</div>
@endsection
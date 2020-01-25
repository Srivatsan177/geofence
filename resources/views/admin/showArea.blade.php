@extends('layouts.app')

@section('content')
<style>
    .table {
   margin: auto;
   width: 50% !important; 
}
</style>
<div class="row mr-0 mt-0">
    <div class="col-md-2" style="background-color:#204a84;">
        @include('admin.inc.sidebar')
    </div>
    <div class="col-md-10">
        <div class="table-responsive">
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>Area Name</th>
                        <th>Count Lands</th>
                        <th>Edit</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($areas as $area)
                        <tr>
                        <td>
                            <a href="/show/{{$state_id}}/{{$dist_id}}/{{$taluk_id}}/{{$area->id}}">{{$area->name}}</a>
                        </td>
                        <td>
                            {{count($area->land)}}
                        </td>
                        <td>
                            <a href="/edit_area/{{$area->id}}" class="btn btn-primary">Edit</a>
                        </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        </div>           
</div>
@endsection
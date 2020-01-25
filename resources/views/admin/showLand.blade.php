@extends('layouts.app')

@section('content')
<style>
    .table {
   margin: auto;
   width: 50% !important; 
}
</style>
<div class="row">
    <div class="col-md-2">
        @include('admin.inc.sidebar')
    </div>
    <div class="col-md-10">
        <table class="table table-striped table-bordered">
            <thead>
                <th>
                    Land Owner
                </th>
                <th>
                    Email
                </th>
                <th>
                    Lat
                </th>
                <th>
                    Long
                </th>
                <th>
                    View
                </th>
                <th>
                    Edit
                </th>
            </thead>
            <tbody>
                @foreach ($lands as $land)
                    <tr>
                        <td>
                            {{$land->name}}
                        </td>
                        <td>
                            {{$land->owner->email}}
                        </td>
                        <td>
                            {{$land->imageSingle['lat']}}
                        </td>
                        <td>
                            {{$land->imageSingle['long']}}
                        </td>
                        <td>
                            <a href="/landUser/{{$land->id}}/{{$land->owner->id}}" class="btn btn-primary">View</a>
                        </td>
                        <td>
                            <a href="/edit_land/{{$land->id}}" class="btn btn-primary">Edit</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
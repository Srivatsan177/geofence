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
                        <th>talukrict Name</th>
                        <th>Count talukricts</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($taluks as $taluk)
                        <tr>
                        <td>
                            <a href="/show/{{$state_id}}/{{$dist_id}}/{{$taluk->id}}">{{$taluk->name}}</a>
                        </td>
                        <td>
                            {{count($taluk->area)}}
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        </div>           
</div>
@endsection
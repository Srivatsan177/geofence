@extends('layouts.app')

@section('content')
    <div class="row mr-0 mt-0">
        <div class="col-md-2" style="background-color:#204a84;">
            @include('admin.inc.sidebar')
        </div>
        <div class="col-md-10">
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>State Name</th>
                            <th>Count Districts</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        @foreach ($states as $state)
                            <td>
                                <a href="/show/{{$state->id}}">{{$state->name}}</a>
                            </td>
                            <td>
                                {{count($state->dist)}}
                            </td>
                        @endforeach
                        </tr>
                    </tbody>
                </table>
            </div>
            </div>           
    </div>
@endsection
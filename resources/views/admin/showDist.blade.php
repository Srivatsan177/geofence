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
                        <th>District Name</th>
                        <th>Count Districts</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($dists as $dist)
                        <tr>
                        <td>
                            <a href="/show/{{$state_id}}/{{$dist->id}}/">{{$dist->district}}</a>
                        </td>
                        <td>
                            {{count($dist->taluk)}}
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        </div>           
</div>
@endsection
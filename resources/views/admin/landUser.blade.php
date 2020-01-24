@extends('layouts.app')

@section('content')
<div class="row mr-0 mt-0">
    <div class="col-md-2" style="background-color:#204a84;">
        @include('admin.inc.sidebar')
    </div>
    <div class="col-md-10">
        <div class="row">
            <div class="col-md-4">
                {{$user->name}}
                <br>
                {{$user->email}}
            </div>
            <div class="col-md-8">
                <div id="myMap" style="width:700px;height:600px;">

                </div>
                <br>
            </div>
        </div>
        <table class="table table-bordered table-hover">
            <tr>
            <th>
                Crop name
            </th>
            <th>
                Year
            </th>
            <th>
                Quarter
            </th>
        </tr>
        
        @foreach ($crops as $crop)
            <tr>
            <td>{{$crop->crop_name}}</td>
            <td>{{$crop->year}}</td>
            <td>{{$crop->quarter_num}}</td>
            </tr>
        @endforeach
    
        </table>
    </div>

</div>
<script type='text/javascript'>
        function loadMapScenario() {
            map = new Microsoft.Maps.Map(document.getElementById('myMap'), {});
            var polygon=new Microsoft.Maps.Polygon([
                @foreach($locs as $loc)
                new Microsoft.Maps.Location({{$loc->lat}},{{$loc->long}}),
                @endforeach
            ]);
            // var polygon = new Microsoft.Maps.Polygon(polygon);
            map.entities.push(polygon);
        }
</script>
@endsection
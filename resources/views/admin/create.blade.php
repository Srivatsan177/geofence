@extends('layouts.app')

@section('content')
<div class="container">
<div class="row">
    <div class="col-md-6 mt-3">
        <div class="container">
            <center>
                <h2>Pin</h2>
                <hr class="heading-hr">
            </center>
            <div id="myMap" style="width:35vw;height:50vh;"></div>
            <button id="my" class="btn btn-outline-success">Generate Area</button>         
        </div>
    </div>
    <div class="col-md-6">
        <section id="contact-us" class="mt-3">
            <div class="container">
                <center>
                    <h2>Enter Details</h2>
                    <hr class="heading-hr">
                </center>

                <div class="jumbotron">
                    <form action="{{action("AdminController@store")}}" method='POST'>
                        @csrf
                        <div class="form-group">
                            <label>Name :</label>
                            <input type="text" name="name" placeholder="Enter name here" class="form-control"
                                required>
                        </div>
                        <div class="form-group">
                            <label>Email :</label>
                            <input type="email" name="email" placeholder="Enter email here" class="form-control"
                            required>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>State :</label>
                                    <select name='state' id="state" class="form-control">
                                        <option value="-1">-Select State-</option>
                                        @foreach ($states as $state)
                                            <option value="{{$state->id}}">{{$state->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>District :</label>
                                    <select name='district' id="district" class="form-control">
                                        <option value="-1">-Select District-</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Taluka :</label>
                                    <select name='taluka' id="taluka" class="form-control">
                                        <option value="-1">Select Taluka</option>
                                        
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Area :</label>
                                    <select name='area' id="area" class="form-control">
                                        <option value="-1">Select Area</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group" id="mylat">
                                    <label>Latitude :</label>
                                    
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group" id="mylong">
                                    <label>Longitude :</label>
                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Registration number :</label>
                                    <input type="text" name="reg" placeholder="Enter registration number here" class="form-control"
                                    required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                
                            </div>
                        </div>

                        <div class="form-group">
                            <label>Remark :</label>
                            <textarea rows="4" class="form-control"></textarea>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn-primary">Submit</button>
                        </div>

                    </form>

                </div>
            </div>

        </section>
    </div>
</div>
<script>
    $(function(){
        $("#district").hide();
        $("#taluka").hide();
        $("#area").hide();
        $("#state").focusout(function(){
            $.ajax({url:"/get-dist",
            data:{state:$("#state").val()},
            success:function(result){
                $("#district").show();
                // alert(result);
                $("#district").append(result);
            },
        });
        });
        $("#district").focusout(function(){
            $.ajax({url:"/get-taluka",
            data:{state:$("#district").val()},
            success:function(result){
                $("#taluka").show();
                // alert(result);
                $("#taluka").append(result);
            },
        });
        });
        $("#taluka").focusout(function(){
            $.ajax({url:"/get-area",
            data:{state:$("#taluka").val()},
            success:function(result){
                $("#area").show();
                // alert(result);
                $("#area").append(result);
            },
        });
        });
        // src="https://www.openstreetmap.org/export/embed.html?bbox=75.64807891845705%2C19.702879865804036%2C75.77957153320314%2C19.80014020033567&amp;layer=mapnik&amp;marker=19.7514798%2C75.71388839999997"
    });
</script>
<script type='text/javascript'>

    var map;
    var locs = [];
    function loadMapScenario() {
        map = new Microsoft.Maps.Map(document.getElementById('myMap'), {});
        Microsoft.Maps.Events.addHandler(map, 'click', function (e) {
            // alert(position);
            var loc = new Microsoft.Maps.Location(
                e.location.latitude,
                e.location.longitude,
            );
            $(function(){
                $("#mylat").append('<input type="text" id="latitude" name="latitude[]" placeholder="Enter Latiitude:" class="form-control" value="'+e.location.latitude+'" readonly>');
                $("#mylong").append('<input type="text" id="latitude" name="longitude[]" placeholder="Enter Latiitude:" class="form-control" value="'+e.location.longitude+'" readonly>');
            });
            locs.push(loc);
            console.log(locs);
            var pushpin = new Microsoft.Maps.Pushpin(loc, null);
            map.entities.push(pushpin);
        });
    }
    $(function () {
        $("#my").on("click", function () {
            console.log(locs);
            var polygon = new Microsoft.Maps.Polygon(locs);
            map.entities.push(polygon);
        });
    });
</script>
@endsection
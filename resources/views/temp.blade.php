<!DOCTYPE html>
<html>

<head>
    <title>loadmapasyncHTML</title>
    <style type='text/css'>
        body {
            margin: 0;
            padding: 0;
            overflow: hidden;
            font-family: 'Segoe UI', Helvetica, Arial, Sans-Serif
        }
    </style>
    <meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
    <script src="https://code.jquery.com/jquery-3.4.1.js"
        integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
    <script type='text/javascript'
        src='https://www.bing.com/api/maps/mapcontrol?key=AiTdUBKTZJ75d7IeoOiirf-13eQLgmINgtCPeL3LZRQDVbiAio4RMDgUcpqIS5xq'></script>
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
</head>

<body onload='loadMapScenario();'>
    <div id='printoutPanel'></div>

    <div id='myMap' style='width: 100vw; height: 90vh;'></div>
    <button id="my">Generate</button>
</body>

</html>
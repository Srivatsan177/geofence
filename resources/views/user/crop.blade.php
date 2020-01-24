@extends('layouts.app')

@section('content')
    <div class="container">
        <table class="table table-striped">
            <thead>
                
                <th>
                    Crop Name
                </th>
                <th>
                    Year
                </th>
                <th>
                    Quater
                </th>
            </thead>
            <tbody>
                @foreach ($crops as $crop)
                <tr>
                        
                    </td>
                    <td>
                        {{$crop->crop_name}}
                    </td>
                    <td>
                        {{$crop->year}}
                    </td>
                    <td>
                        @if ($crop->quarter_num==1)
                            {{"Jan-Mar"}}
                        @elseif($crop->quarter_num==2)
                            {{"Apr-Jun"}}
                        @elseif($crop->quarter_num==3)
                            {{"Jul-Sep"}}
                        @else
                            {{"Oct-Dec"}}
                        @endif
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
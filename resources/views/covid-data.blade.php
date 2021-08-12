<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Covid Tracker API</title>
</head>

<style>
    tr a {
        color: black;
    }

    a:hover {
        text-decoration: none;
    }
</style>

<body>
    <section style="padding-top:60px">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h3>COVID-19 Data Tracking API</h3>
                        </div>
                        <div class="card-body">
                            <table class="table table-striped">
                                <thead>
                                    <tr class="text-center table-primary">
                                        <th><a href="{{ url('/data/country') }}">Country <i class="fa fa-filter"></i></a></th>
                                        <th><a href="{{ url('/data/cases') }}">Cases <i class="fa fa-filter"></i></a></th>
                                        <th><a href="{{ url('/data/todayCases') }}">Today Cases <i class="fa fa-filter"></i></a></th>
                                        <th><a href="{{ url('/data/recovered') }}">Recoved <i class="fa fa-filter"></i></a></th>
                                        <th><a href="{{ url('/data/todayRecovered') }}">Today Recoved <i class="fa fa-filter"></i></a></th>
                                        <th><a href="{{ url('/data/deaths') }}">Deaths <i class="fa fa-filter"></i></a></th>
                                        <th><a href="{{ url('/data/todayDeaths') }}">Today Deaths <i class="fa fa-filter"></i></a></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $item)
                                        <tr class="text-center">
                                            <td class="text-left">{{ $item['country'] }}</td>
                                            <td>{{ number_format($item['cases']) }}</td>
                                            <td class="table-warning">
                                                @if ($item['todayCases'] == 0)
                                                    {{ $item['todayCases'] }}
                                                @else
                                                    +{{ number_format($item['todayCases']) }}
                                                @endif
                                            </td>
                                            <td>{{ number_format($item['recovered']) }}</td>
                                            <td class="table-success">
                                                @if ($item['todayRecovered'] == 0)
                                                    {{ $item['todayRecovered'] }}
                                                @else
                                                    +{{ number_format($item['todayRecovered']) }}
                                                @endif
                                            </td>
                                            <td>{{ number_format($item['deaths']) }}</td>
                                            <td class="table-danger">
                                                @if ($item['todayDeaths'] == 0)
                                                    {{ $item['todayDeaths'] }}
                                                @else
                                                    +{{ number_format($item['todayDeaths']) }}
                                                @endif
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>


</html>

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>

    <div class="container">
        <div class="row">
            @foreach ($trains as $train)
                <div class="col-4 p-3">
                    <div class="card text-start">
                        <div class="card-body">
                            <h5 class="card-title">Treno {{ $train['train_code'] }} </h5>
                            <p class="card-text"><strong>Tratta:</strong> {{ $train['departure_station'] }} -
                                {{ $train['arrival_station'] }} </p>
                            <p class="card-text"><strong>Partenza:</strong> {{ $train['departure_time'] }}</p>
                            <p class="card-text"><strong>Arrivo:</strong> {{ $train['arrival_time'] }}</p>
                            <p class="card-text"><strong>Treno in ritardo:</strong> {{ $train['on_time'] }}
                            </p>

                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>

</body>

</html>

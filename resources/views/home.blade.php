<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Homepage</title>
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
  @foreach ($trains as $train)
      <div class="train-info">
        <h3>{{ $train->giorno_partenza}}</h3>
        <h4>{{ $train->stazione_partenza}}</h4>
        <h4>{{ $train->stazione_arrivo}}</h4>
      </div>
  @endforeach
</body>
</html>
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
        <h3>{{ $train->departure_date}}</h3>
        <h4>{{ $train->departure_station}} {{ $train->departure_time}}</h4>
        <h4>{{ $train->arrival_station}} {{ $train->arrival_time}}</h4>
        <p>{{ $train->train_code}}</p>
      </div>
  @endforeach
</body>
</html>
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Larabnb') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
  <div class="container">
    <div class="row mt-5">
      <div class="col-lg-7 px-0">
        <h2 class="display-4 text-danger">{{ config('app.name', 'Larabnb') }}</h2>
        <p>
          <b style="font-size: 1.8em;">Book unique homes and experence a city like a local.</b>
        </p>
        <form action="">
          <div class="form-group">
            <input type="text" class="form-control" placeholder='Try "Osaka"' />
          </div>
        </form>
      </div>
    </div>
  </div>
</body>
</html>


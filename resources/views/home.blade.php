<!doctype html>
<!--<html lang="{{ app()->getLocale() }}">-->
<html lang="{{ app()->getLocale() }}">
    <head>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>ENGLISH</title>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
    
    </head>

    <body>
        <div id = "app"></div>
        <script>
            window.Laravel = <?php echo json_encode([
                'csrfToken' => csrf_token(),
                     ]); ?>
          </script>
        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'La Molisana: pasta semole e farine di qualità')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css' )}} ">
    <link rel="icon" href="{{ asset('img/logo.png' )}}" sizes="16x16 24x24 32x32 48x48 64x64 128x128">
    
</head>
<body>
        
    @include('partials.header')

    <main>@yield('content')</main>

    @include('partials.footer')

  <script src="{{ asset('js/app.js')}}"></script>

</body>
</html>
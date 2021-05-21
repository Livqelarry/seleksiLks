<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Praditya' }}</title>
    <link rel="stylesheet" href="/css/bootstrap.min.css">
</head>
<body>
    
    @include('layouts.navigation')
    
    <div class="mt-4">
        @yield('content')
    </div>

</body>
</html>
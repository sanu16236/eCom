<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- bootstrap cdn css link --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>E-com Project</title>
</head>
<body>
    
    {{View::make('header')}}
    @yield('content')
    {{View::make('footer')}}

    {{-- jqeury cdn link --}}
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    {{-- bootstrap cdn js link --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
    
</body>
</html>
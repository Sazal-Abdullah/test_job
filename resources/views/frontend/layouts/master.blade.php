<!-- resources/views/frontend/index.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - My Laravel App</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <link href="{{ asset('frontend/css/style.css') }}" rel="stylesheet">
</head>
<body>

    {{-- header start --}}
    @include("frontend.partials.header")
    {{-- header end --}}

    {{-- main content --}}
    @yield("content")
    {{-- main content --}}


    @include('frontend.partials.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('frontend/js/main.js')}} "></script>
</body>
</html>

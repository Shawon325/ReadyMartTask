<!DOCTYPE html>
<html lang="en">

<head>
    @include('Frontend.layouts.css')
</head>

<body>

@include('Frontend.layouts.navbar')

@yield('main_section')

@include('Frontend.layouts.js')

</body>

</html>

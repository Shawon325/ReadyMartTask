<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1">
    <title>Ready Mark Task</title>
    @include('Backend.layouts.backend_css')
    @include('Backend.layouts.backend_js')
</head>
<body>
@include('Backend.layouts.backend_navbar')
<div class="page-container">
    @include('Backend.layouts.backend_sidebar')
    <div class="page-content">
        @include('Backend.layouts.backend_page_head')
        @yield('content')
        @include('Backend.layouts.backend_footer')
    </div>
</div>

</body>
</html>

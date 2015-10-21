<!DOCTYPE html>
<!--[if lte IE 6]>
<html class="preIE7 preIE8 preIE9"><![endif]-->
<!--[if IE 7]>
<html class="preIE8 preIE9"><![endif]-->
<!--[if IE 8]>
<html class="preIE9"><![endif]-->
<!--[if gte IE 9]><!-->
<html><!--<![endif]-->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title> @yield('title_name') </title>
    <meta name="author" content="name">
    <meta name="description" content="description here">
    <meta name="keywords" content="keywords,here">
    <link rel="stylesheet" href="{{ elixir('css/all.css') }}">

</head>
<body>

<div class="container">
    @yield('content')
</div>



@yield('footer')

</div>

<script src={{ asset('js/vendor/vendor.js') }}></script>
<script src="{{ elixir('js/all.js') }}"></script>
</body>
</html>
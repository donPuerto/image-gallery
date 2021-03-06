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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.2.0/min/dropzone.min.css">
    <link rel="stylesheet" href="{{ elixir('css/all.css') }}">
    <link rel="stylesheet" href="{{ asset('css/lightbox.css') }}">

</head>
<body>
@yield('navigation')
<div class="container">


    <div class="row">

        @if(Session::has('flash_message'))
            <div class="alert alert-dismissable alert-success">{{ Session::get('flash_message') }} </div>
        @endif

        @if(Session::has('flash_error'))
             <div class="alert alert-dismissable alert-danger">{{ Session::get('flash_error') }} </div>
        @endif

    </div>
    @yield('content')

    <footer>
        @yield('footer')
    </footer>
</div>



{{--Compiled Jquery and bootstrap Core--}}
<script type="text/javascript" src={{ asset('js/vendor/vendor.js') }}></script>
<script type="text/javascript" src={{ asset('js/vendor/lightbox.min.js') }}></script>
<script type="text/javascript">

    var baseUrl = "{{ url('/') }}";

</script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.2.0/min/dropzone.min.js"></script>
<script type="text/javascript" src="{{ elixir('js/all.js') }}"></script>
</body>
</html>
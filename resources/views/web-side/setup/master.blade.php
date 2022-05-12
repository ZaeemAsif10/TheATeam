<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The A Team</title>
    <link rel="stylesheet" href="{{ asset('public/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('public/assets/css/owl.carousel.css') }}">
    <!-- Custom style  -->
    <link rel="stylesheet" href="{{ asset('public/assets/css/style.css') }}">
    <!-- Googel Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=ABeeZee&display=swap" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css"
        integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>

    @include('web-side.setup.header')


    @yield('content')
    @include('web-side.setup.footer')





    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <!-- Scripts -->
    <script src="{{ asset('public/assets/js/jquery.js') }}"></script>
    <script src="{{ asset('public/assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('public/assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('public/assets/js/owl.carousel.js') }}"></script>
    <script src="{{ asset('public/assets/js/main.js') }}"></script>
</body>

</html>

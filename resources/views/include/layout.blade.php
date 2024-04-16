<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield ('title','Arsi University CVS')</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="{{asset('/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" >
    <link rel="stylesheet" href="@yield ('style')">
    <link rel="shortcut icon" href="@yield('favoic')" type="image/x-icon">
  
    <link href="@yield('fonts.googleapis')">
    <link rel="stylesheet" href="@yield('style1')">

    <link href="@yield("google-font")" rel="stylesheet">

<link rel="stylesheet" href="@yield("style-open-iconic")">
<link rel="stylesheet" href="@yield("style-animate")">

<link rel="stylesheet" href="@yield("style-owl-carousel")">
<link rel="stylesheet" href="@yield("style-owl-theme")">
<link rel="stylesheet" href="@yield("style-magnific")">

<link rel="stylesheet" href="@yield("style-aos")">

<link rel="stylesheet" href="@yield("style-ionicons")">

<link rel="stylesheet" href="@yield("style-flaticon")">
<link rel="stylesheet" href="@yield("style-icomoon")">
<link rel="stylesheet" href="@yield("style")">
  <link href="@yield('min')" rel="stylesheet">
  <link href="@yield('icons')" rel="stylesheet">
  <link href="@yield('boxicons')" rel="stylesheet">
  <link href="@yield('snow')" rel="stylesheet">
  <link href="@yield('bubble')" rel="stylesheet">
  <link href="@yield('remixicon')" rel="stylesheet">
 

  </head>
  <body>
  @yield ('content')
  <script src="@yield("js-jquery")"></script>
  <script src="@yield("js-migrate")"></script>
  <script src="@yield("js/popper")"></script>
  <script src="@yield("js-bootstrap")"></script>
  <script src="@yield("js-easing")"></script>
  <script src="@yield("js-waypoints")"></script>
  <script src="@yield("js-stellar")"></script>
  <script src="@yield("js-carousel")"></script>
  <script src="@yield("js-magnific-popup")"></script>
  <script src="@yield("js-aos")"></script>
  <script src="@yield("js-animateNumber")"></script>
  <script src="@yield("js-scrollax")"></script>
  <script src="@yield("api")"></script>
  <script src="@yield("google")"></script>
  <script src="@yield("main")"></script>
  <script src="@yield ('script')"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <script src="{{asset('/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>

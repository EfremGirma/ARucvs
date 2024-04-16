<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>@yield('title')</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="@yield('favoic')" rel="icon">
  <link href="@yield('apple')" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="@yield('gstatic')" rel="preconnect">
  <link href="@yield('googleapis')" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="@yield('min')" rel="stylesheet">
  <link href="@yield('icons')" rel="stylesheet">
  <link href="@yield('boxicons')" rel="stylesheet">
  <link href="@yield('snow')" rel="stylesheet">
  <link href="@yield('bubble')" rel="stylesheet">
  <link href="@yield('remixicon')" rel="stylesheet">
  <link href="@yield('dbstyle')" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="@yield('style')" rel="stylesheet">
</head>
<body>
    <!-- every content that comes form Admin,User and Manager is passing throught here -->
    @yield('content')
 <!-- Vendor JS Files -->
 <script src="@yield('apexcharts')"></script>
  <script src="@yield('bundle')"></script>
  <script src="@yield('umd')"></script>
  <script src="@yield('echarts')"></script>
  <script src="@yield('quill')"></script>
  <script src="@yield('datatables')"></script>
  <script src="@yield('tinymce')"></script>
  <script src="@yield('validate')"></script>

  <!-- Template Main JS File -->
  <script src="@yield('main')"></script>

</body>

</html>

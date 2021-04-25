<!DOCTYPE html>

<html lang="en">
  <head>
    <base href="./">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="description" content="CoreUI - Open Source Bootstrap Admin Template">
    <meta name="author" content="Łukasz Holeczek">
    <meta name="keyword" content="Bootstrap,Admin,Template,Open,Source,jQuery,CSS,HTML,RWD,Dashboard">
    <title>User - @yield('title')</title>
    <link rel="apple-touch-icon" sizes="57x57" href="dashboard/assets/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="dashboard/assets/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="dashboard/assets/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="dashboard/assets/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="dashboard/assets/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="dashboard/assets/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="dashboard/assets/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="dashboard/assets/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="dashboard/assets/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="dashboard/assets/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="dashboard/assets/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="dashboard/assets/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="dashboard/assets/favicon/favicon-16x16.png">
    <link rel="manifest" href="dashboard/assets/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="dashboard/assets/favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <!-- Icons-->
    <link href="{{ asset('dashboard/css/free.min.css') }}" rel="stylesheet"> <!-- icons -->
    <link href="{{ asset('dashboard/css/flag-icon.min.css') }}" rel="stylesheet"> <!-- icons -->
    <!-- Main styles for this application-->
    <link href="{{ asset('dashboard/css/style.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    @yield('css')

    <!-- Global site tag (gtag.js) - Google Analytics-->
    <script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-118965717-3"></script>
    <script>
      window.dataLayer = window.dataLayer || [];

      function gtag() {
        dataLayer.push(arguments);
      }
      gtag('js', new Date());
      // Shared ID
      gtag('config', 'UA-118965717-3');
      // Bootstrap ID
      gtag('config', 'UA-118965717-5');
    </script>

    <link href="{{ asset('dashboard/css/coreui-chartjs.css') }}" rel="stylesheet">
    <style>
      .nav-active
      {
        background-color: #4638C2 !important;
        color: white !important;
      }
    </style>
  </head>



  <body class="c-app c-dark-theme">
    <div class="c-sidebar c-sidebar-dark c-sidebar-fixed c-sidebar-lg-show" id="sidebar">

      @include('shared.nav-builder')

      @include('shared.header')

      <div class="c-body">

        <main class="c-main">

          @yield('content') 

        </main>
        @include('shared.footer')
      </div>
    </div>



    <!-- CoreUI and necessary plugins-->
    <script src="{{ asset('dashboard/js/coreui.bundle.min.js') }}"></script>
    <script src="{{ asset('dashboard/js/coreui-utils.js') }}"></script>
    @yield('javascript')
  </body>
</html>
<!doctype html>
<!--
* Tabler - Premium and Open Source dashboard template with responsive and high quality UI.
* @version 1.0.0-beta5
* @link https://tabler.io
* Copyright 2018-2022 The Tabler Authors
* Copyright 2018-2022 codecalm.net Paweł Kuna
* Licensed under MIT (https://github.com/tabler/tabler/blob/master/LICENSE)
-->
<html lang="en">
  <head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <title>Sign up - Tabler - Premium and Open Source dashboard template with responsive and high quality UI.</title>
    <!-- CSS files -->
    <link href="{{ asset('/css/tabler.min.css') }}" rel="stylesheet"/>
    <link href="{{ asset('/css/tabler-flags.min.css') }}" rel="stylesheet"/>
    <link href="{{ asset('/css/tabler-payments.min.css') }}" rel="stylesheet"/>
    <link href="{{ asset('/css/tabler-vendors.min.css') }}" rel="stylesheet"/>
    <link href="{{ asset('/css/demo.min.css') }}" rel="stylesheet"/>
  </head>
  <body  class=" border-top-wide border-primary d-flex flex-column">
    <div class="page page-center">
      <div class="container-tight py-4">
        <div class="text-center mb-4">
          <a href="." class="navbar-brand navbar-brand-autodark"><img src="{{ asset('/static/logo.svg') }}" height="36" alt=""></a>
        </div>

        
        @yield('contents')


    </div>
</div>
<!-- Libs JS -->
<!-- Tabler Core -->
<script src="{{ asset('/js/tabler.min.js') }}"></script>
<script src="{{ asset('/js/demo.min.js') }}"></script>
</body>
</html>
<!DOCTYPE html>
<html lang="en" data-footer="true" data-override='{"attributes": {"placement": "vertical" }}'>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <title>ADMIN Canada Online</title>
    <meta name="description"
        content="A vertical menu that newer shows larger pinned version and switches between mobile view and semi-hidden view." />
        <link rel="icon" type="image/png" href="{{ asset('favicon.ico') }}" />

    <meta name="application-name" content="&nbsp;" />
    <meta name="msapplication-TileColor" content="#FFFFFF" />
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;700&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css">

    <link rel="stylesheet" href="{{ asset('acron/font/CS-Interface/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('acron/css/vendor/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('acron/css/vendor/OverlayScrollbars.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('acron/css/styles.css') }}" />
    <link rel="stylesheet" href="{{ asset('acron/css/main.css') }}" />
    <link rel="stylesheet" href="{{ asset('acron/css/vendor/select2.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('acron/css/vendor/bootstrap-datepicker3.standalone.min.css') }}" />

    <link rel="stylesheet" href="{{ asset('acron/css/vendor/datatables.min.css') }}">
    <link rel="stylesheet" href="{{ asset('acron/css/vendor/select2-bootstrap4.min.css') }}" />
    <script src="{{ asset('acron/js/base/loader.js') }}"></script>
    @yield('css_after')
</head>

<body class="h-100 p-0" >
    <div id="root" class="h-100">
        @yield('content')
    </div>

    <!-- Vendor Scripts Start -->
    <script src="{{ asset('acron/js/vendor/jquery-3.5.1.min.js') }}"></script>
    <script src="{{ asset('acron/js/vendor/datatables.min.js') }}"></script>
    <script src="{{ asset('acron/js/vendor/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('acron/js/vendor/OverlayScrollbars.min.js') }}"></script>
    <script src="{{ asset('acron/js/vendor/autoComplete.min.js') }}"></script>
    <script src="{{ asset('acron/js/vendor/clamp.min.js') }}"></script>

    <script src="{{ asset('acron/icon/acorn-icons.js') }}"></script>
    <script src="{{ asset('acron/icon/acorn-icons-interface.js') }}"></script>
    <!-- Vendor Scripts End -->
    <!-- Template Base Scripts Start -->
    <script src="{{ asset('acron/js/base/helpers.js') }}"></script>
    <script src="{{ asset('acron/js/base/globals.js') }}"></script>
    <script src="{{ asset('acron/js/base/nav.js') }}"></script>
    <script src="{{ asset('acron/js/base/settings.js') }}"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.1.9/sweetalert2.min.css"
        integrity="sha512-cyIcYOviYhF0bHIhzXWJQ/7xnaBuIIOecYoPZBgJHQKFPo+TOBA+BY1EnTpmM8yKDU4ZdI3UGccNGCEUdfbBqw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.1.9/sweetalert2.all.min.js"
        integrity="sha512-IZ95TbsPTDl3eT5GwqTJH/14xZ2feLEGJRbII6bRKtE/HC6x3N4cHye7yyikadgAsuiddCY2+6gMntpVHL1gHw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- Template Base Scripts End -->
    <!-- Page Specific Scripts Start -->
    <script src="{{ asset('acron/js/cs/scrollspy.js') }}"></script>
    <script src="{{ asset('acron/js/vendor/datepicker/bootstrap-datepicker.min.js') }}"></script>
    <script src="{{ asset('acron/js/vendor/datepicker/locales/bootstrap-datepicker.es.min.js') }}"></script>
    <script src="{{ asset('acron/js/vendor/jquery.validate/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('acron/js/vendor/jquery.validate/additional-methods.min.js') }}"></script>
    <script src="{{ asset('acron/js/vendor/select2.full.min.js') }}"></script>
    <script src="{{ asset('acron/js/common.js') }}"></script>
    <script src="{{ asset('acron/js/scripts.js') }}"></script>
    <script src="{{ asset('acron/js/forms/controls.select2.js') }}"></script>

    <script src="{{ asset('acron/js/forms/genericforms.js') }}"></script>
    @yield('js_after')
    <!-- Page Specific Scripts End -->
</body>

</html>

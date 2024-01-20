<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title></title>
    <meta content="" name="description">
    <meta content="" name="keywords">
    @include('layouts.style')
    @livewireStyles

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="
    https://cdn.jsdelivr.net/npm/sweetalert2@11.10.3/dist/sweetalert2.min.css
    " rel="stylesheet">
</head>

<body>

    @include('pages.layout-pages.navbar')

    @include('pages.layout-pages.hero')

    @yield('content')

    @include('pages.layout-pages.footer')
    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    @include('layouts.script')
    <script src="
    https://cdn.jsdelivr.net/npm/sweetalert2@11.10.3/dist/sweetalert2.all.min.js
    "></script>

    @livewireScripts

</body>

</html>

<!DOCTYPE html>
<html class="no-js" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head class="top">
    @include('panel.partials.meta')
    @include('panel.partials.link')
    @include('panel.partials.css')
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>Fênix - Grupo 7</title></head>
<body class="page-top" id="app">
    <main>
        @include('panel.partials.nav_panel')
        @yield('panel_default')
        @include('panel.partials.footer')
    </main>
    <footer>
        @include('panel.partials.modal_logout')
    </footer>
    @include('panel.partials.js')
    <script rel="script" href="{{asset('js/app.js')}}"></script>
</body>
</html>


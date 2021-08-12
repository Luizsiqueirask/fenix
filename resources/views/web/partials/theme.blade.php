
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include('web.partials.meta')
        @include('web.partials.link')
        @include('web.partials.font')
        @include('web.partials.css')
        <!--link rel="stylesheet" href="{!{asset('css/app.css')}}"-->
        <title>Fênix Medical & Hospital Grupo</title>
    </head>
    <body id="top">
        <header class="header">
            @include('web.partials.nav')
        </header>
        <main class="content">
            @yield('web_default')
        </main>
        <footer class="footer">
            @include('web.partials.footer')
        </footer>
            @include('web.partials.js')
        <script rel="script" href="{{asset('js/app.js')}}"></script>
    </body>
</html>

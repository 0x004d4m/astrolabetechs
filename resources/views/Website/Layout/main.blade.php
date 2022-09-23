<!doctype html>
<html class="no-js" lang="zxx">
    <head>
        @include('Website.Layout.head')
        <title>@yield('title')</title>
    </head>
<body>
    @include('Website.Layout.preloader')
    @include('Website.Layout.mobile_menu')
    @include('Website.Layout.header')

    @yield('content')

    @include('Website.Layout.footer')
    @include('Website.Layout.scripts')
</body>
</html>

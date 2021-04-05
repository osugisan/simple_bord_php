<html>
    <head>
        <title>@yield('title')</title>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
    <body>
        <!-- resources/views/componentsディレクトリ内のheader.blade.phpを呼び出す -->
        @component('components.header')
        @endcomponent
        <div class="container">
            @yield('content')
        </div>

        @component('components.footer')
        @endcomponent
        
         <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>

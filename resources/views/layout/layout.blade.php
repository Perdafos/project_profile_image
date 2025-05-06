<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://cdn.tailwindcss.com"></script>
    @yield('css')
</head>

<body>
    {{-- <div id="navbar">
        @include('layout.navbar')
    </div> --}}

    <section class="content">
        @yield('content')
    </section>
{{-- 
    @include('layout.footer') --}}
@yield('js')
</html>

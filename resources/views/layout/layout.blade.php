<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

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

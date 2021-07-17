<!doctype html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css" rel="stylesheet">
     
    @stack('css')
</head>

<body>
    <x-Navbar/>
    <div class="container mx-auto ">
        @yield('content')
    </div>
    @stack('js')
</body>

</html>

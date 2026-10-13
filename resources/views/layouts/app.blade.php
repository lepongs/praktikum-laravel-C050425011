<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        /* Mengecilkan ikon panah bawaan pagination */
        nav role[contain="svg"] svg,
        nav svg {
            width: 20px !important;
            height: 20px !important;
        }
    </style>
    <title>@yield('judul')</title>
</head>
<body>
    
    @include('partials.navbar')

    <main>
        @yield('konten')
    </main>
</body>
</html>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    {{-- css --}}
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    {{--icon --}}
    <link rel="stylesheet" href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" />
</head>
<body>
    <main class="flex">
        @include('components.nav')
        <div class="w-full">
            @yield('content')

        </div>
    </main>
</body>
</html>
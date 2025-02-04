<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>3 Job Listing</title>
</head>

<body>

    @include('partials._navbar')
    <main>
        {{ $slot }}
    </main>
    @include('partials._footer')

</body>

</html>

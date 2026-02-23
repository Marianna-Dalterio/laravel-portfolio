<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
<!--applico bootstrap!-->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    <title>App back office</title>
</head>
<body>
    @include("admin.partials.header")
    @yield("content")
</body>
</html>
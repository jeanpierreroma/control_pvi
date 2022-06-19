<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <title>
        @yield('title-block')
    </title>
</head>
<body>
    @include('inc.header')

    <div class="row">
        <div class="col-2"></div>
        <div class="col-7">
            @include('inc.message')
            @yield('content')
        </div>
        <div class="col-3"></div>
</body>
</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >
    <meta
        http-equiv="X-UA-Compatible"
        content="ie=edge"
    >
    @yield('title')
    <link
        rel="stylesheet"
        href="/css/app.css"
    >
</head>

<body>
    <nav>
        <li><a href="">Main</a></li>
        <li><a href="">about</a></li>
        <li><a href="">contact</a></li>
    </nav>
    @yield('content')
</body>

</html>
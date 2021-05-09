<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hacker News Clone</title>
    <link rel="stylesheet" href="/css/app.css" />
    <link rel="stylesheet" href="/css/custom.css" />
</head>

<body>
    <div class="container px-0 container-bg">
        <nav class="navbar navbar-expand-lg my-0 py-2 nav-bg px-0">
            <a class="nav-link py-0 font-weight-bold" href="#">
                <span class="logo px-1">Y</span> Hacker News
            </a>
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link py-0" href="/">new </span></a>
                </li>
                |
                <li class="nav-item">
                    <a class="nav-link nav-link py-0" href="/">past</a>
                </li>
                |
                <li class="nav-item active">
                    <a class="nav-link py-0" href="/">comments</span></a>
                </li>
                |
                <li class="nav-item">
                    <a class="nav-link nav-link py-0" href="/">ask</a>
                </li>
                |
                <li class="nav-item active">
                    <a class="nav-link py-0" href="/">show </span></a>
                </li>
                |
                <li class="nav-item">
                    <a class="nav-link nav-link py-0" href="/">jobs</a>
                </li>
                |
                <li class="nav-item">
                    <a class="nav-link nav-link py-0" href="/">submit</a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link nav-link py-0" href="/">Login</a>
                </li>
            </ul>
        </nav>
        <div class="py-4">
            @yield('content')
        </div>
    </div>
</body>

</html>

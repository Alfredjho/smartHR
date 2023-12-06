<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield ('Title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset ('navbar.css')}}">
    @yield('Style')
</head>
<body>

<nav class="navbar fixed-top navbar-expand-lg bg-light-subtle">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">SmartHR</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-5 mb-2 mb-lg-0" style="flex: 1; display: flex; justify-content: center;">

                <li class="nav-item">
                    <a class="nav-link navbar-item {{ request()->routeIs('dashboard') ? 'active' : '' }} px-2" aria-current="page" href="{{route('dashboard')}}">KMC</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link navbar-item {{ request()->routeIs('tnd') ? 'active' : '' }} px-2" aria-current="page" href="{{route('tnd')}}">Training & Development</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link navbar-item {{ request()->routeIs('forum') ? 'active' : '' }} px-2" aria-current="page" href="{{route('forum')}}">Forum</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link navbar-item {{ request()->routeIs('schedule') ? 'active' : '' }} px-2" aria-current="page" href="{{route('schedule')}}">Schedule</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link navbar-item {{ request()->routeIs('structure') ? 'active' : '' }} px-2" aria-current="page" href="{{route('structure')}}">Structure</a>
                </li>

            </ul>

            <a class="nav-link active" aria-current="page" href="{{route('profile')}}">
                <div style="display: flex; align-items: center;">
                    <img src="{{ asset($user->image) }}" alt="" style="width: 45px; height: 45px; border-radius: 50px; margin-right: 10px;">
                    <span>Hi, {{ $user->name }}</span>
                </div>
            </a>


        </div>
    </div>
</nav>

<br>
<br>
<br>
<br>




<div class="container mt-5">
    @yield('Content')
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <link rel="stylesheet"  type="text/css" href="/css\style.css">

</head>

<body>
<div class="topnav">

    <a href="/" class="{{ Request::path() === '/' ? 'active': ''}}">Home </a>
    @if (Auth::check())
    <a href="/dashboard">Dashboard</a>
    @else
    <a href="/login">Login</a>
    <a href="/register">Register</a>
    @endif

    <div class="topnav-right">
        <a href="/profiel" class="{{ Request::path() === 'profiel' ? 'active': ''}}">Profiel</a>
        <a href="/grades" class="{{ Request::path() === 'grades' ? 'active': ''}}">grades</a>
        <a href="/profession" class="{{ Request::path() === 'profession' ? 'active': ''}}">Profession</a>
        <a href="/motivation" class="{{ Request::path() === 'motivation' ? 'active': ''}}">My motivation</a>
        <a href="/faq" class="{{ Request::path() === 'faq' ? 'faq': ''}}">FAQ</a>
        

    </div>
    @yield('header')
</div>
@yield('content')
</body>
</html>
<script type="text/javascript" src="js\javascript.js"></script>








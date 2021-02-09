
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>
    <link rel="stylesheet"  type="text/css" href="/css\style.css">

</head>

<body>
<div class="topnav">

    <a href="/" class="{{ Request::path() === '/' ? 'active': ''}}">Home </a>

    <div class="topnav-right">
        <a href="/profiel" class="{{ Request::path() === 'profiel' ? 'active': ''}}">Profiel</a>
        <a href="/dashboard" class="{{ Request::path() === 'dashboard' ? 'active': ''}}">Dashboard</a>
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








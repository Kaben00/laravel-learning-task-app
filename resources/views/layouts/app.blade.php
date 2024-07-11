<!DOCTYPE html>
<head>
    <title>Laravel Task App - @yield('title')</title>
    @yield('styles')
</head>
<body>
    <h1>
        @yield('title')
    </h1>
    <div>
        @if (session()->has('success'))
            <div>{{ session('success') }}</div>
        @endif
    </div>
    <div>
        @yield('content')
    </div>
</body>
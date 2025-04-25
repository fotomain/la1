<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title','FireJobs')</title>

</head>

<body>
    <x-header/>
    <h1>@yield('title','Welcome FireJobs')</h1>
    <main class="container mx-auto p-4 mt-4">
        @yield('content')
    </main>

</body>

</html>

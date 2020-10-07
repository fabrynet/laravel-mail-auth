<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Mail - Fabrynet</title>

    <style media="screen">
      body {
        width: 100vw;
        height: 100vh;
      }
      ul {
        list-style: none;
      }
    </style>

</head>
<body>
    <div id="app">


        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>

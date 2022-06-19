<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lisnic Roman</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" />
  </head>
  <body class="bg-gray-700 text-white">
      <header class="fixed bg-gray-700 top-0 left-0 right-0 z-50">
        <div class="container mx-auto flex justify-between p-4">
          <h1 class="text-xl font-black">Lisnic Roman</h1>
          <nav class="mx-2">
            <a href="{{ route('home') }}" class="text-lg mx-2 text-white hover:text-pink-500 transition">Главная страница</a>
            <a href="{{ route('about') }}" class="text-lg mx-2 text-white hover:text-pink-500 transition">Список работ</a>
            @auth("web")
            <a href="{{ route('logout') }}" class="text-lg mx-3 text-white hover:text-pink-500 transition">Log Out</a>
            @endauth

            @guest("web")
            <a href="{{ route('login') }}" class="text-lg mx-3 text-white hover:text-pink-500 transition">Login</a>
            @endguest
          </nav>
        </div>
      </header>
      <main>
        @yield('page-content')
      </main>
      <footer>
        <div class="container mx-auto p-4">
          <p>&copy; Lisnic Roman | Test </p>
        </div>
      </footer>
  </body>
</html>

@extends('layouts.default')

@section('title', 'Авторизация')

@section('page-content')
<section class="relative min-h-screen flex items-center">
  <div class="container mx-auto text-center">
    <div class="h-screen bg-text-gray-700 flex flex-col space-y-10 justify-center items-center">
      <div class="bg-white w-96 shadow-x1 rounded p-5">
        <h1 class="text-3xl text-pink-500 font-medium">Вход</h1>

        <form method="POST" action="{{ route ("login_process") }}" class="space-y-5 mt-5">
          @csrf

          <input name="email" type="text" class="text-black w-full h-12 border border-gray-800 rounded px-3 @error('email') border-red-500 @enderror" placeholder="Email" />

          @error('email')
            <p class="text-red-500">{{ $message }}</p>
          @enderror
          <input name="password" type="password" class="text-black w-full h-12 border border-gray-800 rounded px-3 @error('password') border-red-500 @enderror" placeholder="Пароль" />

          @error('password')
            <p class="text-red-500">{{ $message }}</p>
          @enderror
          <div>
            <a href="#" class="font-medium text-blue-900 hover:bg-blue-300 rounded-md p-2">Забыли пароль?</a>
          </div>
          <div>
            <a href="{{ route('register') }}" class="font-medium text-blue-900 hover:bg-blue-300 rounded-md p-2">Регистрация</a>
          </div>
          <button type="submit" class="text-center w-full bg-blue-900 rounded-md text-white py-3 font-medium">Войти</button>
        </form>
      </div>
    </div>
  </div>
</section>
@endsection

<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function showLoginFrom()
    {
      return view(view: "auth.login");
    }

    public function login(Request $request)
    {
      $data = $request->validate([
          "email" =>["required", "email", "string"],
          "password" =>["required"]
      ]);

      if(auth(guard: "web")->attempt($data)) {
          return redirect(route(name:"home"));
      }

      return redirect(route(name:"login"))->withErrors(["email" => "Пользователь не найден, либо данные некоректны"]);
  }

    public function logout()
    {
      auth(guard: "web")->logout();

      return redirect(route(name: "home"));
    }

    public function showRegisterFrom()
    {
      return view(view: "auth.register");
    }

    public function register(Request $request)
    {
      $data = $request->validate([
          "name" =>["required", "string"],
          "email" =>["required", "email", "string", "unique:users,email"],
          "password" =>["required", "confirmed"]
      ]);

      $user = User::create([
          "name" => $data["name"],
          "email" => $data["email"],
          "password" => bcrypt($data["password"])
      ]);

      if($user){
          auth(guard:"web")->login($user);
        }

        return redirect(route(name:"home"));
    }
}

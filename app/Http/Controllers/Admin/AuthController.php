<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{
      public function index()
      {
        return view(view: "/admin.auth.login");
      }

      public function login(Request $request)
      {
        $data = $request->validate([
            "email" =>["required", "email", "string"],
            "password" =>["required"]
        });

        if(auth(guard: "admin")->attempt($data)) {
            return redirect(route(name:"admin.posts.default"));
        }

        return redirect(route(name:"admin.login"))->withErrors(["email" => "Пользователь не найден, либо данные некоректны"]);

        public function logout()
        {
          auth(guard: "admin")->logout();

          return redirect(route(name: "home"));
        }
}

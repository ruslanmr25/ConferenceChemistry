<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{


    public function dashboard()
    {

        $users = User::whereNot("is_admin", true)->get();



        return view("dashboard", [
            'users' => $users
        ]);
    }
}

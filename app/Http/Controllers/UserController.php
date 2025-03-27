<?php

namespace App\Http\Controllers;

use App\Http\Requests\User\Store;

class UserController extends Controller
{
    public function store(Store $request)
    {
        $name = $request->input('name');
        $email = $request->input('email');

        return "name: $name, email: $email";
    }

    public function create()
    {
        return view('user');
    }
}

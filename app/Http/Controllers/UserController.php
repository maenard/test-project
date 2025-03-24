<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\User\Store;

class UserController extends Controller
{
    public function create()
    {
        return view('user');
    }


    public function store(Store $request)
    {
        return 'data is valid';
    }
}

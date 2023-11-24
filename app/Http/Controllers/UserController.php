<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function home(): string
    {
        return "<h1>My Home page</h1>";
    }
}

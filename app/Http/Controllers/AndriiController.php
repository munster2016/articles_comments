<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Foundation\Auth\Access\Authorizable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AndriiController extends Controller
{
    use Authorizable;

    public function index()
    {
        dd(1);
    }
}

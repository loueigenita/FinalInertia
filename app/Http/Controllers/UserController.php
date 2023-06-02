<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Request;
use Inertia\Inertia;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        $users = User::query()->paginate(5);

        return inertia ('Users/Index', [

            'users' => $users

        ]);
    }
}

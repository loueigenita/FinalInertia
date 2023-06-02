<?php

namespace App\Http\Controllers;
use Inertia\Inertia;
use App\Models\Book;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{

    public function index()
{
    $data = Book::get();
    $countUser = User::get();
    $count = Book::count();
    $countUser = User::count();

    
    return Inertia::render('Dashboard', [
        'count' => $count,
        'countUser' => $countUser,
    ])->withViewData([
        'data' => $data,
        'countUser' => $countUser
    ]);
}

    
}

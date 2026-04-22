<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $users = User::where('agge','>', 30)->orderBy('agge', 'desc')->get();
        return view('user.index', ["users" => $users]);

    }
}
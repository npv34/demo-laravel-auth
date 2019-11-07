<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class UserController extends Controller
{
    public function create()
    {
        if (Gate::allows('crud-user')){
            return view('users.add');
        }

        abort(403,'ban khong co quyen');
    }

    public function index()
    {
        $users = User::all();
        return view('users.list', compact('users'));
    }
}

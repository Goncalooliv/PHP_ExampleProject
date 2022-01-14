<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Empresas;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function show(User $users)
    {
        return view('user/show',['users'=>$users]);
    }

    public function destroy(User $users)
    {
        $users->delete();

        return redirect('/dashboard');
    }
}

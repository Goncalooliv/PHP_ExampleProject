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

    public function updateAddress(Request $request, User $users)
    {
        $request->validate([
            'morada' => 'required',
            'zipcode' => 'required',
            'doorNumber' => 'required',
            'phoneNumber' => 'required',
        ]);

        $users->update($request->all());

        return redirect('/');    
    }

    public function destroy(User $users)
    {
        $users->delete();

        return redirect('/dashboard');
    }

    public function profile(User $users)
    {
        return view('user/profile',['users'=>$users]);
    }

    public function profileEdit(User $users)
    {
        return view('user/profileEdit',['users'=>$users]);
    }

    public function anuncios()
    {
        return $this-> hasMany(Empresas::class, 'empresas_id', 'id');
    }
}

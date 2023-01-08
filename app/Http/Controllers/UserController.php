<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Empresas;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Laravel\Ui\Presets\React;

class UserController extends Controller
{
    public function show(User $users)
    {
        return view('user/show',['users'=>$users]);
    }

    public function destroy($id)
    {
        if(User::find($id)){
            User::destroy($id);
        }

        return redirect('/dashboard/user');
    }

    public function userProfile($id)
    {
        $user = User::find($id);
        return view('user.profile', compact('user'));
    }

    public function userProfileTest($id)
    {
        $users = User::find($id);
        return view('user.editProfile', compact('users'));
    }

    public function update(Request $request, $id){
        $user = User::where('id', $id)->update([
            'name' => $request['nome'],
            'morada' => $request['morada'],
            'zipcode' => $request['zipcode'],
            'phoneNumber' => $request['phoneNumber'],
        ]);

        return view('welcome');
    }

    public function anuncios()
    {
        return $this-> hasMany(Empresas::class, 'empresas_id', 'id');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserProfilController extends Controller
{
    public function index()
    {

    }


    public function editProfil()
    {
    	return view('user.editProfil');
    }


    public function updateProfil(Request $request)
    {
    	$avatar = $request->file('avatar')->store('avatars');

    	$request->User()->update([
    		'nama' => request('nama'),
    		'avatar' => $avatar
    	]);

    	return redirect()->route('beranda');
    }

}

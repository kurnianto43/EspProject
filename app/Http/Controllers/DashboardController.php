<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kulkas;

class DashboardController extends Controller
{


	public function index()
    {

    $kulkasCount=Kulkas::count();

    	return view('beranda', compact('kulkasCount', $kulkasCount));
    }
}

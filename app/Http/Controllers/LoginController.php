<?php

namespace App\Http\Controllers;

// use Illuminate\Contracts\Session\Session;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Routing\Controller;
use App\Models\Pegawai;




class LoginController extends Controller
{
    

   

    public function logout(Request $request)
{
    // $this->guard()->logout();

    $request->session()->invalidate();
    $request->session()->regenerateToken();
    
    Session::flash('logout-notification', 'You have been logged out successfully.');

    return redirect('/loginpage');
}

}

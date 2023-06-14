<?php

namespace App\Http\Controllers;

// use Illuminate\Contracts\Session\Session;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;




class LoginController extends Controller
{
    
    // public function index(){
    //     return view('login.loginpage', [
    //         'title' => 'Login', 
    //     ]);
    // }

    public function authenticate(Request $request): RedirectResponse
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => 'required|string',
        ]);

        if(Auth::attempt($credentials)){

           

            $request->session()->regenerate();
            
            return back()->with('success', 'Login Success');

            return redirect()->intended('/kasir');
        }


        // return back()->withErrors('loginError', 'Login Failed');

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');

        // dd('berhasil login');
        
        
    }


    // public function logout(Request $request): RedirectResponse
    // {
    //     Auth::logout();

    //     $request->session()->invalidate();

    //     $request->session()->regenerateToken();

    //     return redirect('/loginpage');
    // }


    // public function logout()
    // {
    //     Auth::logout();

    //     Session::flash('success', 'Logout Successfully');

    //     return redirect('/loginpage');
        
    // }

    public function logout(Request $request)
{
    // $this->guard()->logout();

    $request->session()->invalidate();
    $request->session()->regenerateToken();
    
    Session::flash('logout-notification', 'You have been logged out successfully.');

    return redirect('/loginpage');
}

}

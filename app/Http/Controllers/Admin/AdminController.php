<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function HomePage()
    {
        return view('auth.login');
    }

    public function Dashboard()
    {
        $user = Auth::user();
        if ($user) {
            return view('pals-africa.welcome');
        } else {
            return $this->NonAutorise();
        }
        
    }

    public function NonAutorise()
    {
        Auth::logout();
        return redirect()->route('HomePage');
    }

}

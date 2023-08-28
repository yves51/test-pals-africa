<?php

namespace App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;


class LogoutController extends Controller
{
    public function Deconnexion(){
        auth()->logout();
        return redirect()->route('HomePage');
    }
}

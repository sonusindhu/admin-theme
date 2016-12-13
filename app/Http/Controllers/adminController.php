<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use redirect;
class adminController extends Controller
{
    public function index(){
        return view('admin/index' );
    }
    public function dashboard(){
        return view('admin/index' );
    }
    public function logout(){
        Auth::logout();
        return redirect('login');
    }
}

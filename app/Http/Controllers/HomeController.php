<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        \Log::info('USER TYPE: '. Auth::user()->type);
        if (Auth::user() && Auth::user()->type == 'ADMIN')
        {
            return redirect('admin/dashboard');
        }else if (Auth::user() && Auth::user()->type == 'TEACHER')
        {
            return redirect('teacher/grades');
        }
        return view('home');
    }
}

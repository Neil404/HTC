<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Grades extends Controller
{
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
        return view('admin/grades/grades');
    }
    public function first()
    {
        return view('admin/grades');
    }
    public function second()
    {
        return view('admin/grades');
    }
    public function third()
    {
        return view('admin/grades');
    }
    public function fourth()
    {
        return view('admin/grades');
    }
}

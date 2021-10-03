<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Student;

class Students extends Controller
{
    //
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
        return view('admin/students');
    }
    public function editAction($id) {
        if(!is_numeric($id)) {
            return redirect('/' . $id);
        }
        return view('admin/students/student');
    }

    public function addAction() {
        return view('admin/students/student');
    }

    public function create(Request $request) {
        // ['firstname', 'lastname', 'middlename', 'age', 'yearlevel', 'gender'];
        // lacking with validations yet
        $student = Student::create($request->all());
        return view('admin/students/student', $student);
    }
}

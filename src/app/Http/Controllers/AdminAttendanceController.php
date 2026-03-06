<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminAttendanceController extends Controller
{
    public function list()
    {
        return view('admin.attendance.list');
    }

    public function show($id)
    {
        return view('admin.attendance.show');
    }

    public function staffAttendance($id)
    {
        return view('admin.attendance.staff');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminStampCorrectionRequestController extends Controller
{
    public function list()
    {
        return view('admin.stamp_correction_request.list');
    }

    public function approve($id)
    {
        // 承認処理（後で実装）
    }
}

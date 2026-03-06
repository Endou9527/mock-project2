<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StampCorrectionRequestController extends Controller
{
    public function list()
    {
        return view('stamp_correction_request.list');
    }

    public function store($attendanceId)
    {
        // 申請保存処理（後で実装）
    }
}

<?php

namespace App\Http\Controllers\Bendahara;

use App\Http\Controllers\Controller;
use App\Models\Attendance;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ManageAttendanceController extends Controller
{
    public function index(Request $request) {
        //1. bulan
        $month = $request->input('month', now()->month);
        //2. tahun
        $year = $request->input('year', now()->year);
        //3. start the date
        $startDate = Carbon::create($year, $month, 1);
        //4. end the date
        $endDate = $startDate->copy()->day(30)->endOfDay();

        $attendances = Attendance::with('user')
                        ->whereBetween('created_at', [$startDate, $endDate])
                        ->orderBy('created_at', 'desc')
                        ->get();
        

        return view('Bendahara.attendance.index', compact('attendances', 'month', 'year'));
    }
}
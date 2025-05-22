<?php

namespace App\Http\Controllers\Bendahara;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Attendance;  // <- ini harus ditambahkan

class BendaharaController extends Controller
{
    public function index()
    {
        // Ambil jumlah kehadiran hari ini
        $todayAttendance = Attendance::whereDate('created_at', now())
            ->where('status', 'Hadir')
            ->count();

        // Kirim datanya ke view
        return view('bendahara.dashboard', compact('todayAttendance'));
    }
}

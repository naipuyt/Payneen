<?php

namespace App\Http\Controllers\Employee;

use App\Http\Controllers\Controller;
use App\Models\Attendance;
use App\Models\Employee;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EmployeeSalaryController extends Controller
{
    public function index(Request $request) {
        // user yang login
        $user = auth()->user();

        $employee = Employee::where('user_id', $user->id)->first();

        if(!$employee) {
            return back()->with('error', 'Data karyawan tidak ditemukan');
        }



        // input bulan dan tahun
        $month = (int) $request->input('month', now()->month);
        $year = (int) $request->input('month', now()->year);

        // validasi bulan dan tahun
        if($month < 1 || $month > 12 || $year < 2000 || $year >now()->year + 1) {
            return back()->with('error', 'Bulan dan tahun tidak valid');
        }

        //  start = awal dari pertaman di bulan tersebut
        // end = akhir hari dari bulan tersebut
        try {
            $start = Carbon::createFromDate($year, $month, 1)->startOfDay();
            $end = Carbon::createFromDate($year, $month, 1)->endOfMonth()->endOfDay();
        } catch (\Throwable $th) {
            return back()->with('error', 'Terjadi kesalahan');
        }
        // mengambil jumlah data prsensi dengan status hadir milik user dengan rentang waktu yang telah di tentukan oleh variable start dan end
        $presentCount = Attendance::where('user_id', $user->id)  // idnya harus sama  
                        ->whereBetween('created_at', [$start, $end]) // created at nya harus sesuai variable
                        ->where('status', 'hadir') // statusnya harus hadir
                        ->count(); 

        // rumus gajian = hari masuk/30 x gaji pokok
        $totalSalary = round(($presentCount / 30) * $employee->gaji_pokok, 0);  // menghitung total salary

        return view('Employee.salary.index', compact(
            'month',
            'year',
            'presenCount',
            'employee',
            'totalSalary'
        ));
    }
}
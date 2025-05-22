@extends('base')

@section('content')
@if(session('error'))
    <div class="alert alert-primary" role="alert">
        {{ session('error') }}
    </div>
@endif
<div class="container py-5">
    <h2 class="text-center mb-5 fw-semibold" style=" font-family: 'Frogie', sans-serif; font-size: 2.5rem; color: #2E5E8E;">Dashboard Karyawan</h2>

    <div class="row g-4 justify-content-center"> <!-- Tambah justify-content-center -->
        <!-- Presensi -->
        <div class="col-md-4">
            <div class="card dashboard-card h-100 text-center p-5 d-flex flex-column justify-content-between" style="background-color: #CEDDA6; border-radius: 15px; border: none;">
                <div>
                    <h5 class="card-title" style="font-family: 'Frogie', sans-serif; font-size: 2rem; color: #2E5E8E;">Presensi</h5>
                    <p class="card-text" style="font-family: 'Poppins', sans-serif; font-size: 1.2rem; color: #2E5E8E;">Lihat dan pantau kehadiran harian.</p>
                </div>
                <a href="{{ route('attendance.index') }}" class="btn" style="font-family: 'Poppins', sans-serif; background-color: #2F5496; border: none; padding: 10px 30px; font-size: 1rem; font-weight: bold; color: white;">LIHAT</a>
            </div>
        </div>
        <!-- Gaji -->
        <div class="col-md-4">
            <div class="card dashboard-card h-100 text-center p-5 d-flex flex-column justify-content-between" style="background-color: #CEDDA6; border-radius: 15px; border: none;">
                <div>
                    <h5 class="card-title" style="font-family: 'Frogie', sans-serif; font-size: 2rem; color: #2E5E8E;">Gaji</h5>
                    <p class="card-text" style="font-family: 'Poppins', sans-serif; font-size: 1.2rem; color: #2E5E8E;">Hitung dan kelola gaji berdasarkan presensi.</p>
                </div>
                <a href="{{ route('salary.index') }}" class="btn" style="font-family: 'Poppins', sans-serif; background-color: #2F5496; border: none; padding: 10px 30px; font-size: 1rem; font-weight: bold; color: white;">CEK GAJI</a>
            </div>
        </div>
    </div>
</div>
@endsection
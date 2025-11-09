@extends('layouts.app')

@section('title', 'About Us')

@section('content')
<div style="background-color: #f0f0f0; min-height: calc(100vh - 300px); display: flex; align-items: center; justify-content: center; padding: 3rem 2rem;">
    <div class="container" style="max-width: 900px;">
        <h1 style="font-size: 2.5rem; font-weight: bold; text-align: center; margin-bottom: 3rem; color: #2c3e50;">About EduFun</h1>
        
        <div style="background-color: transparent; text-align: center; line-height: 1.8;">
            <p style="font-size: 1.1rem; color: #2c3e50; margin-bottom: 2rem;">
                EduFun adalah perusahaan pendidikan berbasis teknologi asal Indonesia. EduFun menyediakan layanan akses pendidikan dalam format tulisan berbahasa Indonesia yang disajikan secara online melalui website.
            </p>
            
            <p style="font-size: 1.1rem; color: #2c3e50;">
                Hingga Juni 2024, EduFun memiliki lebih dari 10 ribu pengguna. EduFun hadir sebagai bentuk revolusi dari pendidikan di Indonesia dengan mengedepankan cara berpikir kritis, logis, rasional, dan sumber pengetahuan sains yang terintegrasi terhadap semua mahasiswa IT di Indonesia. EduFun bercita-cita mencetak generasi Indonesia yang memahami ilmu pengetahuan dan cinta belajar.
            </p>
        </div>
    </div>
</div>
@endsection

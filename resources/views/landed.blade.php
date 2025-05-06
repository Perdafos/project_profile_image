@extends('layout.layout')
@section('title', 'Landed')

@section('content')
<nav style="display: flex; justify-content: space-between; align-items: center; padding: 20px; background-color: rgba(255, 255, 255, 0.8); box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);">
    <div>
        <img src="{{ asset('asset/image/CDA_Primary Logo 1.png') }}" alt="Cyber Defense Logo" style="width: 120px; height: auto;">
    </div>
    <div>
        <a href="#home" style="margin: 0 15px; text-decoration: none; color: #333; font-weight: bold;">Beranda</a>
        <a href="#about" style="margin: 0 15px; text-decoration: none; color: #333; font-weight: bold;">Tentang Kami</a>
        <a href="#curriculum" style="margin: 0 15px; text-decoration: none; color: #333; font-weight: bold;">Kurikulum</a>
        <a href="#timeline" style="margin: 0 15px; text-decoration: none; color: #333; font-weight: bold;">Timeline</a>
        <a href="#certification" style="margin: 0 15px; text-decoration: none; color: #333; font-weight: bold;">Sertifikasi</a>
    </div>
</nav>

<section style="display: flex; align-items: center; justify-content: space-between; padding: 60px 20px; background-color: #f9f9f9; height: 100vh;">
    <div style="flex: 1; padding-right: 20px;">
        <h1 style="font-size: 2.5em; color: #333; margin-bottom: 20px;">
            Take Your Part in Global <span style="color: #f77f00;">Cyber Defense</span> Elite
        </h1>
        <p style="font-size: 1.2em; color: #555; margin: 20px 0;">
            Dapatkan pengalaman belajar praktis, dan nikmati bimbingan langsung dari mentor expert Internasional.
        </p>
        <button style="padding: 12px 24px; background-color: #f77f00; color: #fff; border: none; border-radius: 25px; font-size: 1em; cursor: pointer;">
            Daftar Sekarang
        </button>
    </div>
    <div style="flex: 1; text-align: center;">
        <img src="{{ asset('asset/image/PRINT.png') }}" alt="Cyber Defense" style="max-width: 100%; border-radius: 12px;">
    </div>
</section>

<section style="background-color: #f77f00; display: flex; flex-wrap: wrap; justify-content: center; gap: 20px; padding: 40px;">
    <div style="width: 150px; height: 150px; display: flex; justify-content: center; align-items: center;">
        <img src="{{ asset('asset/image/Logo Kek.png') }}" alt="" style="max-width: 100%; height: auto;">
    </div>
    <div style="width: 150px; height: 150px; display: flex; justify-content: center; align-items: center;">
        <img src="{{ asset('asset/image/FINAL LOGO SEAL 2.png') }}" alt="" style="max-width: 100%; height: auto;">
    </div>
    <div style="width: 150px; height: 150px; display: flex; justify-content: center; align-items: center;">
        <img src="{{ asset('asset/image/WhatsApp Image 2025-03-30 at 12.54.21_aaa235b5 1.png') }}" alt="" style="max-width: 100%; height: auto;">
    </div>
    <div style="width: 150px; height: 150px; display: flex; justify-content: center; align-items: center;">
        <img src="{{ asset('asset/image/Group 1610.png') }}" alt="" style="max-width: 100%; height: auto;">
    </div>
    <div style="width: 150px; height: 150px; display: flex; justify-content: center; align-items: center;">
        <img src="{{ asset('asset/image/FINAL LOGO SEAL 2.png') }}" alt="" style="max-width: 100%; height: auto;">
    </div>
</section>

<section style="display: flex; justify-content: space-around; padding: 40px 20px; gap: 20px;">
    <div style="text-align: center; width: 200px;">
        <img src="{{ asset('asset/image/Utool-20250325-140134617 1.png') }}" alt="John Doe" style="max-width: 100%; border-radius: 12px; margin-bottom: 10px;">
        <h3 style="font-size: 1.2em; color: #333;">John Doe</h3>
        <p style="font-size: 0.9em; color: #555;">Senior Security Specialist</p>
    </div>
    <div style="text-align: center; width: 200px;">
        <img src="{{ asset('asset/image/Utool-20250325-142449414[1] 2.png') }}" alt="Jane Smith" style="max-width: 100%; border-radius: 12px; margin-bottom: 10px;">
        <h3 style="font-size: 1.2em; color: #333;">Jane Smith</h3>
        <p style="font-size: 0.9em; color: #555;">Cyber Threat Analyst</p>
    </div>
    <div style="text-align: center; width: 200px;">
        <img src="{{ asset('asset/image/WhatsApp Image 2025-04-10 at 11.23.20_375df8e7 1.png') }}" alt="Michael Lee" style="max-width: 100%; border-radius: 12px; margin-bottom: 10px;">
        <h3 style="font-size: 1.2em; color: #333;">Michael Lee</h3>
        <p style="font-size: 0.9em; color: #555;">Ethical Hacker</p>
    </div>
</section>
@endsection
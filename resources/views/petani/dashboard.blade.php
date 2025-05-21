@extends('petani.layouts.app')
@section('title', 'Dashboard')

@section('content')
    <!-- Content Area -->
    <div class="main-content" style="flex: 1; display: flex; flex-direction: column; justify-content: center; align-items: center; gap: 30px;">
      <div class="menu-buttons" style="display: flex; flex-direction: column; gap: 20px; z-index: 2">
        <button
          class="btn"
          style="
            background-color: #729043;
            color: white;
            border: none;
            padding: 15px 30px;
            font-size: 18px;
            font-weight: bold;
            border-radius: 15px;
            display: flex;
            align-items: center;
            gap: 12px;
            width: 300px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
          "
          onmouseover="this.style.transform='scale(1.05)'; this.style.boxShadow='0 6px 10px rgba(0, 0, 0, 0.2)';"
          onmouseout="this.style.transform='scale(1)'; this.style.boxShadow='0 4px 6px rgba(0, 0, 0, 0.1)';"
          onclick="window.location.href='{{ route('petani.scan') }}'"
        >
          <i class="bi bi-qr-code-scan"></i> Scan
        </button>

        <button
          class="btn"
          style="
            background-color: #729043;
            color: white;
            border: none;
            padding: 15px 30px;
            font-size: 18px;
            font-weight: bold;
            border-radius: 15px;
            display: flex;
            align-items: center;
            gap: 12px;
            width: 300px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
          "
          onmouseover="this.style.transform='scale(1.05)'; this.style.boxShadow='0 6px 10px rgba(0, 0, 0, 0.2)';"
          onmouseout="this.style.transform='scale(1)'; this.style.boxShadow='0 4px 6px rgba(0, 0, 0, 0.1)';"
            onclick="window.location.href='{{ route('petani.riwayat') }}'"
        >
          <i class="bi bi-clock-history"></i> Riwayat Analisis
        </button>
        <button
          class="btn"
          style="
            background-color: #729043;
            color: white;
            border: none;
            padding: 15px 30px;
            font-size: 18px;
            font-weight: bold;
            border-radius: 15px;
            display: flex;
            align-items: center;
            gap: 12px;
            width: 300px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
          "
          onmouseover="this.style.transform='scale(1.05)'; this.style.boxShadow='0 6px 10px rgba(0, 0, 0, 0.2)';"
          onmouseout="this.style.transform='scale(1)'; this.style.boxShadow='0 4px 6px rgba(0, 0, 0, 0.1)';"
            onclick="window.location.href='{{ route('petani.panduan') }}'"
        >
          <i class="bi bi-bar-chart-line"></i> Panduan
        </button>
      </div>
    </div>
@endsection

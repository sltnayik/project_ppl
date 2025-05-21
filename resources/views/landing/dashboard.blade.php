@extends('landing.layouts.app')

@section('title', 'Landing Page')

@section('content')
    <!-- Hero Section -->
    <div
      class="container-fluid"
      style="background-image: url('{{ asset('assets/bg_landingpage.jpeg') }}'); background-size: cover; background-repeat: no-repeat; height: 100vh; display: flex; align-items: center; justify-content: center; text-align: center"
    >
      <div style="display: flex; flex-direction: column; align-items: center; justify-content: center; gap: 100px">
        <strong style="color: #ffffff; font-size: 3rem">Jagung terjaga, petani bahagia.</strong>
        <button type="button" class="btn" style="background-color: #729043; color: #ffffff; border-radius: 50px">Gabung Sekarang <img src="{{ asset('assets/panah_kanan.png') }}" alt="" style="width: 30px; height: 30px" /></button>
      </div>
    </div>

    <!-- About Us -->
    <div class="container-fluid" style="height: 100vh; padding: 30px">
      <div style="display: flex; flex-direction: column; align-items: center; justify-content: center; padding: 50px 0; height: 20vh">
        <h2 style="background-color: #729043; color: #ffffff; border-radius: 20px; padding: 0.7rem">Mengapa Harus <span style="background-color: #427837; border-radius: 20px; padding: 0.1rem">ScanAja?</span></h2>
      </div>
      <div class="row" style="display: flex; flex-direction: row; justify-content: center; align-items: center; gap: 100px; height: 70vh">
        <picture class="col-7" style="background-color: rgba(114, 144, 67, 0.5); padding: 20px; border-radius: 15px; max-width: 550px; max-height: 350px">
          <img src="{{ asset('assets/bg_about_us.jpeg') }}" class="img-fluid" alt="..." style="border-radius: 15px; position: relative; top: -40px; max-height: 350px" />
        </picture>
        <div class="col-5" style="display: flex; flex-direction: column; justify-content: center; gap: 20px; max-width: 380px; max-height: 300px">
          <span style="display: block; text-align: justify; color: #19663c"
            >ScanAJa merupakan inovasi digital di bidang pertanian yang memanfaatkan kecerdasan buatan untuk mendeteksi penyakit pada tanaman jagung melalui gambar. Dengan proses analisis yang cepat dan akurat, ScanAJa membantu petani
            mengenali gejala penyakit lebih awal sehingga penanganan dapat dilakukan dengan tepat waktu. Kami berkomitmen untuk menghadirkan teknologi yang mudah digunakan dan bermanfaat dalam menjaga produktivitas lahan dan kualitas hasil
            panen.</span
          >
        </div>
      </div>
    </div>

    <!-- Fitur -->
    <div class="container-fluid" style="height: 100vh; padding: 30px">
      <div style="display: flex; flex-direction: column; align-items: center; justify-content: center; padding: 50px 0; height: 20vh">
        <h2 style="background-color: #729043; color: #ffffff; border-radius: 20px; padding: 0.7rem">Fitur Unggulan <span style="background-color: #427837; border-radius: 20px; padding: 0.3rem">ScanAja</span></h2>
      </div>
      <div class="row" style="display: flex; justify-content: center; align-items: center; gap: 100px; height: 70vh">
        <div class="col" style="display: flex; justify-content: center; align-items: center">
          <button type="button" class="btn" style="background-color: #729043; max-width: 250px; height: 370px; border-radius: 15px; padding: 15px">
            <h6 style="color: #ffffff">ANALISIS DAN SOLUSI TANAMAN JAGUNG</h6>
            <img src="{{ asset('assets/fitur1.jpeg') }}" class="img-fluid" alt="..." style="border-radius: 15px" />
          </button>
        </div>
        <div class="col" style="display: flex; justify-content: center; align-items: center">
          <button type="button" class="btn" style="background-color: #729043; max-width: 250px; height: 370px; border-radius: 15px; padding: 15px">
            <h6 style="color: #ffffff">PANDUAN PERAWATAN JAGUNG</h6>
            <img src="{{ asset('assets/fitur2.jpeg') }}" class="img-fluid" alt="..." style="border-radius: 15px" />
          </button>
        </div>
      </div>
    </div>
@endsection

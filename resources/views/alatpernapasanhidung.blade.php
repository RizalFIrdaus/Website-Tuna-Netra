@extends('layout.tp')



@section('title', 'Materi')

@section('container')
<div class="container">
  <div class="row">
    <div class="col-md">
      <nav class="navbar navbar-expand-xxl navbar-light">
        <div class="container-fluid">
            <a class="navbar-brand d-flex justify-content-center align-items-center" href="#" style="color: #fff">
                <img src="{{asset('/img/logo2x.png')}}" alt="" width="30" height="24" class="d-inline-block align-top">
                Tuna Rungu
              </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="/">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/tujuanpembelajaran">Tujuan Pembelajaran</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/materi/sistempernapasan">Materi</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/evaluasi">Evaluasi</a>
              </li>
            </ul>
          </div>
        </div>
  </nav>
    </div>
  </div>
</div>

<div id="main">
    <div class="container">
      <div class="row">
        <div class="col-lg mt-5 d-flex justify-content-between">
          <div class="head">     
            <div class="headlink">Materi / Organ Penapasan / Hidung</div>
            <div class="decs">Alat Penapasan Manusia</div>
          </div>
         <div class="img-logo">
          <img src="{{asset('/img/logohead.png')}}" alt="">
        </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg">
            <nav>
                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                  <a class="nav-item nav-link active" id="nav-pengertian-tab" data-toggle="tab" href="#nav-pengertian" role="tab" aria-controls="nav-pengertian" aria-selected="true">Materi</a>
                  <a class="nav-item nav-link" id="nav-video-tab" data-toggle="tab" href="#nav-video" role="tab" aria-controls="nav-video" aria-selected="false">Video</a>
                </div>
              </nav>
              <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-pengertian" role="tabpanel" aria-labelledby="nav-pengertian-tab">
                    <div class="jumbotron jumbotron-fluid">
                        <div class="container py-5">
                           <div class="main-content">
                               <img  src="{{asset('/img/bagianhidung.png')}}" alt="" width="700px">
                               <div class="text py-4 font-weight-bolder" style="line-height: 40px">
                                <span class="pengertian">Hidung</span> adalah saluran pernafasan pertama pada manusia. Didalam hidung, hidung memiliki rongga hidung yang terdapat rambut halus dan selaput lendir. Bulu halus berfungsi untuk menyaring udara agar kotoran tidak masuk kedalam paru-paru. Selaput lendir berfungsi untuk mengatur kelembapan udara dan suhu yang sesuai dengan tubuh. <span class="fungsi">Fungsi hidung </span>dalam pernafasan adalah untuk menyaring udara yang masuk, mengatur kelembapan udara dan mengatur suhu udara sesuai dengan tubuh. <span class="bagian">Bagian Hidung</span> terdiri dari lubang hidung dan rongga hidung. Setiap rongga hidung memiliki rambut-rambur halus yang berfungsi untuk menyaring udara yang masuk.
                               </div>
                           </div>
                        </div>
                      </div>
                </div>
                <div class="tab-pane fade" id="nav-video" role="tabpanel" aria-labelledby="nav-video-tab">
                    <div class="jumbotron jumbotron-fluid">
                        <div class="container py-5">
                           <div class="main-content">
                               <div class="judul">
                                   <h3>Video Penjelasan Tentang Hidung</h3>
                               </div>
                               <div class="ratio ratio-16x9">
                                <iframe
                                  src="https://www.youtube.com/embed/0UZop_onGSw"
                                  title="YouTube video"
                                  allowfullscreen
                                ></iframe>
                              </div>
                        </div>
                      </div>
                </div>
              </div>
              <div class="col-md-12 d-flex justify-content-between pt-3 pb-5">
                <a href="/tujuanpembelajaran" class="btn btn-danger">Kembali</a>
                <a href="/materi/alatpernapasan/tenggorokan" class="btn btn-success">Lanjut</a>
              </div>
        </div>
      </div>
    </div>
  </div>
@endsection
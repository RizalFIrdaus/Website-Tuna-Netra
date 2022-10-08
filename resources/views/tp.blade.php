@extends('layout.tp')



@section('title', 'Tujuan Pembelajaran')

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

<div class="inti">
  <div class="container">
      <div class="row">
        <div class="col-md mt-5 d-flex justify-content-between">
          <div class="head">     
            <div class="headlink">Tujuan Pembelajaran</div>
            <div class="decs">KD & Indikator</div>
          </div>
          <div class="img-logo">
            <img src="{{asset('/img/logohead.png')}}" alt="">
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <table class="table bg-warning">
            <thead>
              <tr>
                <th scope="col" class="text-center">Tujuan Pembelajaran : </th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1. Siswa mampu menyebutkan organ pernapasan manusia</td>
              </tr>
              <tr>
                <td>2. Siswa mampu menyebutkan fungsi masing-masing organ pernapasan manusia</td>
              </tr>
              <tr>
                <td>3. Siswa mampu menyebutkan proses pernapasan pada manusia</td>
              </tr>
              <tr>
                <td>4. Siswa mampu menyebutkan penyakit pernapasan manusia</td>
              </tr>
              <tr>
                <td>5. Siswa mampu menyebutkan cara menjaga kesehatan pernapasan manusia</td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="col-md-12 d-flex justify-content-between">
          <a href="/" class="btn btn-danger">Kembali</a>
          <a href="/materi/sistempernapasan" class="btn btn-success">Lanjut</a>
        </div>
      </div>
    </div>
  </div>
</div>



{{-- 
<div id="main">
  <div class="container">
    <div class="row">
      <div class="col-lg-2">
      </div>
      <div class="col-lg mt-5 d-flex justify-content-between">
        <div class="head">     
          <div class="headlink">Tujuan Pembelajaran</div>
          <div class="decs">KD & Indikator</div>
        </div>
       <div class="img-logo">
        <img src="{{asset('/img/logohead.png')}}" alt="">
      </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-2">
      </div>
      <div class="col-lg">
        <div class="jumbotron jumbotron-fluid my-4">
          <div class="container">
            <div class="main-content">
              <div class="judul py-4">
                <h3>KD & Indikator</h3>
              </div>
              <div class="text">
                <table class="table bg-warning">
                  <thead>
                    <tr>
                      <th scope="col" class="text-center">KOMPETENSI DASAR</th>
                      <th scope="col" class="text-center">INDIKATOR</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>3.1 Mengidentifikasi organ tubuh manusia dan hewan beserta</td>
                      <td>3.1.1 Siswa mampu menyebutkan organ pernapasan dan fungsinya pada manusia</td>
                    </tr>
                    <tr>
                      <td></td>
                      <td>3.1.2 Siswa mampu menyebutkan organ pernapasan dan fungsinya pada hewan</td>
                    </tr>
                    <tr>
                      <td>4.1 Membuat daftar organ penting pada manusia dan hewan beserta fungsinya</td>
                      <td>4.1.1 Siswa mampu membuat daftar nama organ pernapasan pada manusia</td>
                    </tr>
                    <tr>
                      <td></td>
                      <td>4.1.2 Siswa mampu membuat daftar nama organ pernapasan pada hewan</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
        
      </div>
    </div>
  </div>
</div> --}}



@endsection
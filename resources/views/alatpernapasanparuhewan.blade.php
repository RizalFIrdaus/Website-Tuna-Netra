@extends('layout.tp')



@section('title', 'Materi')

@section('container')

@extends('layout.sidenav')

<div id="main">
    <div class="container">
      <div class="row">
        <div class="col-lg mt-5 d-flex justify-content-between">
          <div class="head">     
            <div class="headlink">Materi / Organ Penapasan / Paru Hewan</div>
            <div class="decs">Alat Penapasan Manusia</div>
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
                               <img  src="{{asset('/img/parukucing.jpg')}}" alt="" width="300px">
                               <img  src="{{asset('/img/paruburung.jpeg')}}" alt="" width="300px">
                               <div class="text py-4 font-weight-bolder" style="line-height: 40px">
                                <span class="pengertian">Paru mamalia</span> adalah hewan yang menyusui anaknya. Mamalia hidup di darat dan ada juga yang hidup di air. Contoh mamalia yang hidup di darat adalah kucing, harimau, gajah, sapi, kelinci. Contoh mamalia yang hidup di air adalah ikan lumba-lumba dan ikan paus. Organ pernafasan manusia sama dengan organ pernafasan mamalia.  Mamalia bernafas menggunakan paru-paru.
                               Paru burung hidup di darat. <span class="fungsi"> Burung bernafas dengan paru-paru</span> . Burung mempunyai organ pernafasan yang disebut pundi-pundi [kantong] udara. Proses pernafasan burung yaitu udara masuk melalui hidung, lalu ke tenggorokan, kemudian ke pundi-pundi udara dan terakhir ke paru-paru.

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
                                  src="https://www.youtube.com/embed/Alj0MWajcUQ?start=30"
                                  title="YouTube video"
                                  allowfullscreen
                                ></iframe>
                              </div>
                        </div>
                      </div>
                </div>
              </div>
          
        </div>
      </div>
    </div>
  </div>
@endsection
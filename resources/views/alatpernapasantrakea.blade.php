@extends('layout.tp')



@section('title', 'Materi')

@section('container')

@extends('layout.sidenav')

<div id="main">
    <div class="container">
      <div class="row">
        <div class="col-lg mt-5 d-flex justify-content-between">
          <div class="head">     
            <div class="headlink">Materi / Organ Penapasan / Trakea</div>
            <div class="decs">Alat Penapasan Hewan</div>
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
                               <img  src="{{asset('/img/trakea.jpg')}}" alt="" width="350px">
                               <div class="text py-4 font-weight-bolder" style="line-height: 40px">
                                Serangga hidup di darat. <span class="pengertian">Serangga bernafas dengan trakea</span> . Trakea adalah pembuluh-pembuluh halus yang bercabang yang memenuhi seluruh bagian tubuh serangga. Proses pernafasan serangga adalah oksigen masuk dan keluar disebabkan oleh gerakan otot tubuh serangga yang teratur. Contoh serangga adalah nyamuk, belalang, lalat, rayap, dan kupu-kupu.
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
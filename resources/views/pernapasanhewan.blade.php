@extends('layout.tp')



@section('title', 'Materi')

@section('container')

@extends('layout.sidenav')

<div id="main">
    <div class="container">
      <div class="row">
        <div class="col-lg mt-5 d-flex justify-content-between">
          <div class="head">     
            <div class="headlink">Materi / Organ Pernapasan pada Hewan</div>
            <div class="decs">Sistem Pernapasan Hewan</div>
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
                               <div class="judul">
                                   <h3>Pengertian Sistem Pernapasan Hewan</h3>
                               </div>
                               <img src="{{asset('/img/pernapasanhewan.png')}}" width="700px" alt="">
                               <div class="text py-4 font-weight-bolder" style="line-height: 40px;">  
                                Hewan mempunyai organ pernafasan yang berbeda-beda. Macam-macam organ pernafasan hewan adalah paru-paru, insang, kulit, trakea dan campuran yaitu bernafas dengan paru-paru dan kulit. 
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
                                   <h3>Video Sistem Pernapasan</h3>
                               </div>
                               <div class="ratio ratio-16x9">
                                <iframe
                                  src="https://www.youtube.com/embed/gZFvreUl4R8?start=30"
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
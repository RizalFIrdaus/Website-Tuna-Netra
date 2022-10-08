@extends('layout.tp')



@section('title', 'Materi')

@section('container')

@extends('layout.sidenav')

<div id="main">
    <div class="container">
      <div class="row">
        <div class="col-lg mt-5 d-flex justify-content-between">
          <div class="head">     
            <div class="headlink">Materi / Organ Penapasan / Kulit</div>
            <div class="decs">Alat Penapasan Hewan</div>
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
                               <img  src="{{asset('/img/kulit.jpg')}}" alt="" width="450px">
                               <div class="text py-4 font-weight-bolder" style="line-height: 40px">
                               Pernapasan kulit cacing hidup di tanah. Cacing tidak memiliki organ pernafasan khusus.  <span class="pengertian">Cacing bernafas dengan kulit</span>. Proses pernafasan pada cacing adalah oksigen masuk kedalam tubuh cacing melalui permukaan kulit cacing yang basah. Kulit cacing yang basah terdapat banyak pembuluh darah sehingga mempermudah masuknya oksigen dan dapat mengeluarkan karbondioksida. 
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
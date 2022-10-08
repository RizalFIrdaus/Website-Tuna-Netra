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
                <a class="nav-link" href="#home">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#about">Tentang Pengembang</a>
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
            <div class="headlink">Materi / Gangguan Pernapasan</div>
            <div class="decs">Gangguan Pernapasan Pada Manusia</div>
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
                  <a class="nav-item nav-link" id="nav-fungsi-tab" data-toggle="tab" href="#nav-fungsi" role="tab" aria-controls="nav-fungsi" aria-selected="false">Fungsi</a>
                  <a class="nav-item nav-link" id="nav-bagian-tab" data-toggle="tab" href="#nav-bagian" role="tab" aria-controls="nav-bagian" aria-selected="false">Bagian</a>
                  <a class="nav-item nav-link" id="nav-video-tab" data-toggle="tab" href="#nav-video" role="tab" aria-controls="nav-video" aria-selected="false">Video</a>
                </div>
              </nav>
              <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-pengertian" role="tabpanel" aria-labelledby="nav-pengertian-tab">
                    <div class="jumbotron jumbotron-fluid">
                        <div class="container py-5">
                           <div class="main-content">
                               <div class="judul">
                                   <h3>Pengertian Gangguan Pernapasan Pada Manusia</h3>
                               </div>
                               <div class="text py-4">
                                   Lorem ipsum dolor sit, amet consectetur adipisicing elit. Saepe, fugit repellendus, est dolorum voluptates, explicabo magni ratione nesciunt eaque rerum tempore. Corporis tenetur distinctio eligendi assumenda doloribus earum magni nobis quas suscipit quasi voluptatem voluptatibus facere iure laboriosam, rem quia. Praesentium, quae laborum deleniti vitae ipsa suscipit voluptas impedit commodi delectus modi unde saepe asperiores quaerat sint ratione harum. Saepe harum hic minima incidunt cum quibusdam labore enim! Dolorem aliquam voluptatem laboriosam numquam assumenda nulla nostrum saepe officiis, maxime facere, modi perspiciatis. Expedita consequuntur commodi voluptas veritatis maiores reprehenderit vero qui odit velit repellendus? Dolores expedita optio ratione dolorum nam.
                               </div>
                           </div>
                        </div>
                      </div>
                </div>
                <div class="tab-pane fade" id="nav-fungsi" role="tabpanel" aria-labelledby="nav-fungsi-tab">
                    <div class="jumbotron jumbotron-fluid">
                        <div class="container py-5">
                           <div class="main-content">
                               <div class="judul">
                                   <h3>Fungsi Gangguan Pernapasan Pada Manusia</h3>
                               </div>
                               <div class="text py-4">
                                   Lorem ipsum dolor sit, amet consectetur adipisicing elit. Saepe, fugit repellendus, est dolorum voluptates, explicabo magni ratione nesciunt eaque rerum tempore. Corporis tenetur distinctio eligendi assumenda doloribus earum magni nobis quas suscipit quasi voluptatem voluptatibus facere iure laboriosam, rem quia. Praesentium, quae laborum deleniti vitae ipsa suscipit voluptas impedit commodi delectus modi unde saepe asperiores quaerat sint ratione harum. Saepe harum hic minima incidunt cum quibusdam labore enim! Dolorem aliquam voluptatem laboriosam numquam assumenda nulla nostrum saepe officiis, maxime facere, modi perspiciatis. Expedita consequuntur commodi voluptas veritatis maiores reprehenderit vero qui odit velit repellendus? Dolores expedita optio ratione dolorum nam.
                               </div>
                           </div>
                        </div>
                      </div>
                </div>
                <div class="tab-pane fade" id="nav-bagian" role="tabpanel" aria-labelledby="nav-bagian-tab">
                    <div class="jumbotron jumbotron-fluid">
                        <div class="container py-5">
                           <div class="main-content">
                               <div class="judul">
                                   <h3>Bagian Gangguan Pernapasan Pada Manusia</h3>
                               </div>
                               <div class="text py-4">
                                   Lorem ipsum dolor sit, amet consectetur adipisicing elit. Saepe, fugit repellendus, est dolorum voluptates, explicabo magni ratione nesciunt eaque rerum tempore. Corporis tenetur distinctio eligendi assumenda doloribus earum magni nobis quas suscipit quasi voluptatem voluptatibus facere iure laboriosam, rem quia. Praesentium, quae laborum deleniti vitae ipsa suscipit voluptas impedit commodi delectus modi unde saepe asperiores quaerat sint ratione harum. Saepe harum hic minima incidunt cum quibusdam labore enim! Dolorem aliquam voluptatem laboriosam numquam assumenda nulla nostrum saepe officiis, maxime facere, modi perspiciatis. Expedita consequuntur commodi voluptas veritatis maiores reprehenderit vero qui odit velit repellendus? Dolores expedita optio ratione dolorum nam.
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
                                   <h3>Video Gangguan Pernapasan Pada Manusia</h3>
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
              <div class="col-md-12 d-flex justify-content-between pt-3 pb-5">
                <a href="/materi/alatpernapasan/paruparu" class="btn btn-danger">Kembali</a>
                <a href="/evaluasi" class="btn btn-success">Evaluasi</a>
              </div>
        </div>
      </div>
    </div>
  </div>
@endsection
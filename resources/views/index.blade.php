@extends('layout.main')

@section('css', '/css/style.css' )

@section('title' ,'Tuna Rungu')

@section('container')
{{-- <div class="container">
    <div id="home"></div>
    <nav class="navbar navbar-expand-xxl navbar-light">
            <div class="container-fluid">
                <a class="navbar-brand d-flex justify-content-center align-items-center" href="#">
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
                    <a class="nav-link" href="#about">About</a>
                  </li>
                </ul>
              </div>
            </div>
      </nav>
</div> --}}


<div class="headline">
  <div class="container spaces">
    <div class="row">
      <div class="col-md-12 col-sm-1">
        <div class="headtext">
          <h1>media pembelajaran sistem pernafasan manusia</h1>
        </div>
        <a href="#kegiatan" class="btn btn-success">Mulai</a>
      </div>
    </div>
  </div>
</div>

  

  <div class="brand">
    <div class="container">
      <div class="row my-row">
        <div class="col-md-6 col-sm-12">
          <div class="brand-main d-flex align-items-center">
            <div class="text">tut wuri handayani</div>
            <img src="{{asset('/img/logo-tutwuri.png')}}">
          </div>
        </div>
        <div class="col-md-6 col-sm-12">
          <div class="brand-content d-flex align-items-center">
            <img src="{{asset('/img/logo-unj.png')}}" alt="">
            <div class="text">universitas negeri jakarta</div>
          </div>
        </div>
      </div>
    </div>
  </div>



<div class="kegiatan" id="kegiatan">
  <div class="container">
    <div class="row">
      <h3 class="headsection text-center pt-5 pb-5">Langkah Kegiatan</h3>
      <div class="col-md-4">
        <div class="menu-content">
          <img src="{{asset('/img/book.png')}}" alt="">
          <div class="t">
            <a class="btn btn-success green" href="/tujuanpembelajaran" role="button" style="height: 100%; width:80%;">Tujuan Pembelajaran</a>
          </div>
       </div>
      </div>
      <div class="col-md-4">
        <div class="menu-content">
          <img src="{{asset('/img/papan.png')}}" alt="">
          <div class="t">
            <a class="btn btn-success green" href="/materi/sistempernapasan" role="button">Materi</a>
          </div>
       </div>
      </div>
      <div class="col-md-4">
        <div class="menu-content">
          <img src="{{asset('/img/evaluasi.png')}}" alt="">
          <div class="t">
            <a class="btn btn-success green" href="/evaluasi" role="button" >Evaluasi</a>
          </div>
       </div>
      </div>
    
    </div>
  </div>
</div>



<div id="about">
  <div class="container">
  <h3 class="headsection text-center  w-100" style="color:#2B195B ">Tentang Pengembang</h3>
  <div class="main-about">
    <div class="develop d-flex justify-content-around align-items-center">
      <div class="d-flex align-items-start">
        <div class="nav flex-column nav-pills me-3 gap-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
            <a class="nav-link active flex-row" id="v-pills-home-tab" data-bs-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">
              <div class="content d-flex flex-row justify-content-around align-items-center">
                <div class="img"><img src="{{asset('/img/person.png')}}" alt=""></div>
                <div class="text">
                  <div class="name">Fitri Ayu Choirunnisa</div>
                  <div class="desc">Student UNJ - Penulis</div>
                </div>
              </div>
            </a>
        </div>

        <div class="tab-content" id="v-pills-tabContent">
          <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
            <div class="content ">
              <h3 class="text-center">Heading</h3>
              <p>
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nesciunt, soluta! Enim similique inventore tenetur assumenda veritatis saepe rem doloribus quisquam sapiente recusandae, rerum velit voluptates voluptate? Aut optio aliquid eos, libero esse aperiam nostrum totam quis, perferendis eaque magnam. Rem quis iusto vero dignissimos eveniet, delectus, harum maxime totam, fugit praesentium asperiores dolorem exercitationem voluptate eius ex similique velit! Veniam debitis repellat et quo sequi neque perspiciatis ut distinctio, a reprehenderit ab ducimus totam enim delectus. Eveniet sed, nihil id soluta repellat qui autem sit mollitia voluptates dicta aspernatur hic molestias consequatur sunt quam accusantium quae fugiat dolores voluptatem natus.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  
    
  </div>
</div> 


<div id="footer">
  <div class="main-footer ">
    <p class="d-flex justify-content-center">Copyright @ 2021</p>
  </div>
</div>
@endsection

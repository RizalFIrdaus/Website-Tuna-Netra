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
            <div class="headlink">Evaluasi</div>
            <div class="decs">Soal Latihan</div>
          </div>
         <div class="img-logo">
          <img src="{{asset('/img/logohead.png')}}" alt="">
        </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg">
       
            <div class="exam d-flex flex-column">
                <div class="pagination">
                    <div class="jumbotron jumbotron-fluid">
                        <div class="container py-5">
                           <div class="main-content">
                               <div class="main-exam">
                                @foreach ($evaluasi as $e)
                                <form action="/evaluasi/{{$e->id}}" method="post">      
                                  @method('patch')
                                  @csrf      
                                <div class="soal">

                                 @if ($e->gambar !== null)
                                 <img src="{{asset('/img/'.$e->gambar)}}" style="padding-bottom: 20px;width:400px">
                                 @endif

                                    <p>
                                     
                                      {{$e->id}}.
                                      {{$e->soal}}...
                                    </p>
                                </div>

                              
                              
                                  <div class="row py-5">
                                    <div class="col-6 d-flex flex-row">
                                      <div class="form-check">
                                        <input class="form-check-input check" type="radio" name="jawaban" id="a" value="a" {{ ($e->is_active=="a")? "checked" : "" }}>
                                        
                                      </div>
                                        <p>A. {{$e->pilihan_a}}</p>
                                    </div>
                                    <div class="col-6 d-flex flex-row">
                                      <div class="form-check">
                                        <input class="form-check-input check" type="radio" name="jawaban" id="b" value="b" {{ ($e->is_active=="b")? "checked" : "" }}>
                                       
                                      </div>
                                        <p>B. {{$e->pilihan_b}}</p>
                                    </div>
                                  </div>
                                  <div class="row">
                                    <div class="col-6 d-flex flex-row">
                                      <div class="form-check">
                                        <input class="form-check-input check" type="radio" name="jawaban" id="c" value="c" {{ ($e->is_active=="c")? "checked" : "" }}>
                                        
                                      </div>
                                        <p>C. {{$e->pilihan_c}}</p>
                                    </div>
                                    <div class="col-6 d-flex flex-row">
                                      <div class="form-check">
                                        <input class="form-check-input check" type="radio" name="jawaban" id="d" value="d" {{ ($e->is_active=="d")? "checked" : "" }}>
                                       
                                      </div>
                                        <p>D. {{$e->pilihan_d}}</p>
                                    </div>
                                  </div>
                                
                               </div>
                           </div>
                        </div>
                      </div>
                      
                      <div class="endexam d-flex flex-column">
                        <div class="timer">
                            <div class="pertanyaan text-center my-4">
                              <p>
                                Pertanyaan
                                    {{$e->id}}
                              </p>
                            </div>
                        </div>
                        <div class="buttonexam d-flex my-4 justify-content-around">
                            <button class="btn btn-success" type="submit">Submit</button>
                            <a class="btn btn-primary conf" href="/result" role="button"  >Selesai</a>
                        </div>
                      </div>
                      @endforeach
                    </form> 
                </div>

                <div class="halaman">
                  {{ $evaluasi->links() }}
                </div>
  
            </div>
          
        </div>
      </div>
    </div>
  </div>


@endsection
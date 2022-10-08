@extends('layout.tp')



@section('title', 'Materi')

@section('container')

<div id="main">
    <div class="container">
      <div class="row">
        <div class="col-lg mt-5 d-flex justify-content-between">
          <div class="head">     
            <div class="headlink">Management Soal</div>
            <div class="decs">Tambah Soal</div>
          </div>
         <div class="img-logo">
          <img src="{{asset('/img/logohead.png')}}" alt="">
        </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg">
            <form style="color: #fff" method="post" action="">
                @method('post')
                @csrf
                <div class="form-group">
                    <label for="soal">Soal</label>
                    <textarea class="form-control" id="soal" rows="3" name="soal"></textarea>
                  </div>
                <div class="form-group">
                  <label for="pilihan_a">pilihan A</label>
                  <input class="form-control" id="pilihan_a" name="pilihan_a">
                </div>
                <div class="form-group">
                  <label for="pilihan_b">pilihan B</label>
                  <input class="form-control" id="pilihan_b" name="pilihan_b">
                </div>
                <div class="form-group">
                  <label for="pilihan_c">pilihan C</label>
                  <input class="form-control" id="pilihan_c" name="pilihan_c">
                </div>
                <div class="form-group">
                  <label for="pilihan_d">pilihan D</label>
                  <input class="form-control" id="pilihan_d" name="pilihan_d">
                </div>
                <div class="form-group">
                  <label for="kunci">Jawaban</label>
                  <input class="form-control" id="kunci" name="kunci">
                </div>
                
                <button class="btn btn-success my-4">Tambah Soal</button>
              </form>
          
        </div>
      </div>
    </div>
  </div>
@endsection
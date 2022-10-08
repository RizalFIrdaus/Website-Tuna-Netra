@extends('layout.tp')



@section('title', 'Hasil Evaluasi')

@section('container')

<div id="main">
    <div class="container">
      <div class="row">
        <div class="col-lg mt-5 d-flex justify-content-between">
          <div class="head">     
            <div class="headlink">Evaluasi</div>
            <div class="decs">Hasil Evaluasi</div>
          </div>
         <div class="img-logo">
          <img src="{{asset('/img/logohead.png')}}" alt="">
        </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg">
            <div class="main-result">
                <table class="table table-striped table-primary my-4">
                    <thead>
                      <tr>
                        <th scope="col">Nomor</th>
                        <th scope="col">Pilihan</th>
                        <th scope="col">Benar/Salah</th>
                        <th scope="col">Score</th>
                      </tr>
                    </thead>
                    
               
                    <tbody>    
                    @foreach ($result as $r)
                      <tr>
                        <th scope="row">{{$r->id}}</th>
                        <td style="text-transform: uppercase">{{$r->is_active}}</td>
                        <td>{{ ($r->correct)?"Benar":"Salah"}}</td>
                        <td>{{$r->score}},00</td>
                      </tr>
                      @endforeach
                      <tr>
                        <td>Rekap Nilai</td>
                        <td></td>
                        <td>Total Nilai : </td>
                        <td>{{$total/10}},00</td>
                      </tr>
                </tbody>
              
                  </table>
            </div>
            <div class="endsection">
                @foreach ($result as $r)
                    
              
                <form action="/result" method="post">
                    @method('patch')
                    @csrf    
                    @endforeach
                    <button class="btn btn-success">Selesai Evaluasi</button>
                </form>
                
            </div>
        </div>
      </div>
    </div>
  </div>
@endsection
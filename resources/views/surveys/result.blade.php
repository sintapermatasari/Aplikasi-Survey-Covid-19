@extends('surveys.layout')

@section('content')
   <br>
   <br>
   <br>
   <br>
   <br>
   <br>

    <div class="card text-center">
  <div class="card-header">
    <div class="row" style="text-align: center">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Hasil Survey COVID-19
                 </h2>
            </div>
        </div>
    </div>
  </div>
  <div class="card-body">
    <div class="row" style="text-align: center;">
      <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nama : </strong>
                <strong id="yes">{{ $surveys->nama }}</strong>
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Point : </strong>
                <label id="yes">{{ $surveys->yes }}</label>
            </div>
        </div>


        @if($surveys->yes>-1 & $surveys->yes<8)         
               <div class="col-xs-12 col-sm-12 col-md-12">
                  <div class="form-group">
                      <strong>Potensi Terkena COVID-19 : </strong>
                      <label id="status">Resiko Rendah</label>
                  </div>
              </div>     
        @elseif($surveys->yes>7 & $surveys->yes<15)
              <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Potensi Terkena COVID-19 : </strong>
                        <label id="status">Resiko Sedang</label>
                    </div>
                </div>     
        @else
            <div class="col-xs-12 col-sm-12 col-md-12">
                  <div class="form-group">
                      <strong>Potensi Terkena COVID-19 : </strong>
                      <label id="status">Resiko Tinggi</label>
                  </div>
              </div>
        @endif
    </div>
  </div>
  <div class="card-footer text-muted">
     <a class="btn btn-primary" href="{{ route('surveys.index') }}">Keluar</a>
  </div>
</div>
@endsection
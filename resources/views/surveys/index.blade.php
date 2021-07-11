@extends('surveys.layout')
@section('content')
    <div class="row">

        <div class="col-lg-12 margin-tb">

            <center>
                <br>
                <br>
                <br>
                <br>
                <br>
                <h2 style="font-family: bold;color: black">Selamat Datang di Survey COVID-19</h2>
                <br>
            </center>
        </div>

    </div>

    @if ($message = Session::get('success'))

        <div class="alert alert-success">

            <p>{{ $message }}</p>

        </div>

    @endif
    
    <center>
       
        <a class="btn btn-danger" href="{{ route('surveys.create') }}">                Klik
        Disini        </a>
    </center>    

@endsection
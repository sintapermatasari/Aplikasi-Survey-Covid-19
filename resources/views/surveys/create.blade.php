@extends('surveys.layout')

  

@section('content')

<div class="row">

    <div class="col-lg-12 margin-tb">

        <div class="pull-left">

            <h2 style="color: black">Survey COVID-19 </h2>
            <h2 style="color: black">Penilaian Resiko Pribadi COVID-19 </h2>

        </div>

    </div>

</div>

   

@if ($errors->any())

    <div class="alert alert-danger">

        <strong>Whoops!</strong> There were some problems with your input.<br><br>

        <ul>

            @foreach ($errors->all() as $error)

                <li>{{ $error }}</li>

            @endforeach

        </ul>

    </div>

@endif

   <center>

    <form action="{{ route('surveys.store') }}" method="POST">

    @csrf
    <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="pull-left">
                <strong style="color: black">Nama</strong>
                <input type="text" name="nama" id="nama" class="form-control" placeholder="Nama" style="width: 600px" required>
                <br>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="pull-left" align="center">
                <strong style="color: black">Umur</strong>
                <input type="text" name="umur" id="umur" class="form-control" placeholder="Umur" style="width: 600px" required>
                <br>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="pull-left">
                <strong style="color: black">Alamat</strong>
                <input type="text" name="jk" id="jk" class="form-control" placeholder="Alamat" style="width: 600px" required>
                <br>
            </div>
        </div>
    <table class="table table-striped table-bordered table-light">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Kegiatan</th>
                <th scope="col">Ya/Tidak</th>
            </tr>
        </thead>
        <tbody>
            
            <tr>
                           <td style="vertical-align:middle">1</td>
                           <td style="vertical-align:middle">Saya pergi keluar rumah</td>
                           <td>
                            <div style="display:inline-block">
                            <input type="radio" id="q1" name="y1" value="1">
                            <label for="y1">Ya</label><br>
                            <input type="radio" id="q1" name="n1" value="0">
                            <label for="n1">Tidak</label><br>
                            </div>
                           </td>
                       </tr>
                       <tr>
                        <td style="vertical-align:middle">2</td>
                        <td style="vertical-align:middle">Saya Menggunakan Transportasi umum : onlie, angkot, bus, taksi, kereta api</td>
                        <td>
                         <div style="display:inline-block">
                         <input type="radio" id="q2" name="y2" value="1">
                         <label for="y2">Ya</label><br>
                         <input type="radio" id="q2" name="n2" value="0">
                         <label for="n2">Tidak</label><br>
                         </div>
                        </td>
                    </tr>
                    <tr>
                        <td style="vertical-align:middle">3</td>
                        <td style="vertical-align:middle">Saya tidak memakai master pada saat berkumpul dengan orang lain</td>
                        <td>
                         <div style="display:inline-block">
                         <input type="radio" id="q3" name="y3" value="1">
                         <label for="y3">Ya</label><br>
                        <input type="radio" id="q3" name="n3" value="0">
                         <label for="n3">Tidak</label><br>
                         </div>
                        </td>
                    </tr>
                    <tr>
                        <td style="vertical-align:middle">4</td>
                        <td style="vertical-align:middle">Saya berjabat dengan orang lain</td>
                        <td>
                         <div style="display:inline-block">
                         <input type="radio" id="q4" name="y4" value="1">
                         <label for="y3">Ya</label><br>
                         <input type="radio" id="q4" name="n4" value="0">
                         <label for="n4">Tidak</label><br>
                         </div>
                        </td>
                    </tr>
                    <tr>
                        <td style="vertical-align:middle">5</td>
                        <td style="vertical-align:middle">Saya tidak membersihkan tangan dengan hand sanitizer / tisu basah sebelum pegang kemudi mobil / motor</td>
                        <td>
                         <div style="display:inline-block">
                         <input type="radio" id="q5" name="y5" value="1">
                         <label for="y3">Ya</label><br>
                         <input type="radio" id="q5" name="n5" value="0">
                         <label for="n5">Tidak</label><br>
                         </div>
                        </td>
                    </tr>
                    <tr>
                        <td style="vertical-align:middle">6</td>
                        <td style="vertical-align:middle">Saya menyentuh benda/uang yang juga disentuh oleh orang lain</td>
                        <td>
                         <div style="display:inline-block">
                         <input type="radio" id="q6" name="y6" value="1">
                         <label for="y3">Ya</label><br>
                         <input type="radio" id="q6" name="n6" value="0">
                         <label for="n6">Tidak</label><br>
                         </div>
                        </td>
                    </tr>
                    <tr>
                        <td style="vertical-align:middle">7</td>
                        <td style="vertical-align:middle">Saya tidak menjaga jarak 1,5 meter dengan orang lain ketika: belanja, bekerja, belajar, ibadah</td>
                        <td>
                         <div style="display:inline-block">
                         <input type="radio" id="q7" name="y7" value="1">
                         <label for="y3">Ya</label><br>
                         <input type="radio" id="q7" name="n7" value="0">
                         <label for="n7">Tidak</label><br>
                         </div>
                        </td>
                    </tr>
                    <tr>
                        <td style="vertical-align:middle">8</td>
                        <td style="vertical-align:middle">Saya makan diluar rumah (warung / restaurant)</td>
                        <td>
                         <div style="display:inline-block">
                         <input type="radio" id="q8" name="y8" value="1">
                         <label for="y8">Ya</label><br>
                         <input type="radio" id="q8" name="n8" value="0">
                         <label for="n8">Tidak</label><br>
                         </div>
                        </td>
                    </tr>
                    <tr>
                        <td style="vertical-align:middle">9</td>
                        <td style="vertical-align:middle">Saya tidak minum air hangat & cuci tangan dengan sabun setelah tiba di tujuan</td>
                        <td>
                         <div style="display:inline-block">
                         <input type="radio" id="q9" name="y9" value="1">
                         <label for="y3">Ya</label><br>
                         <input type="radio" id="q9" name="n9" value="0">
                         <label for="n9">Tidak</label><br>
                         </div>
                        </td>
                    </tr>
                    <tr>
                        <td style="vertical-align:middle">10</td>
                        <td style="vertical-align:middle">Saya berada di wilayah keluharan tempat pasien tertular</td>
                        <td>
                         <div style="display:inline-block">
                         <input type="radio" id="q10" name="y10" value="1">
                         <label for="y3">Ya</label><br>
                         <input type="radio" id="q10" name="n10" value="0">
                         <label for="n10">Tidak</label><br>
                         </div>
                        </td>
                    </tr>
                    <tr>
                        <td style="vertical-align:middle">11</td>
                        <td style="vertical-align:middle">Saya tidak pasang hand sanitizer di depan pintuk masuk, untuk bersihkan tangan sebelum pegang gagang (handle) pintu masuk rumah</td>
                        <td>
                         <div style="display:inline-block">
                         <input type="radio" id="q11" name="y11" value="1">
                         <label for="y3">Ya</label><br>
                         <input type="radio" id="q11" name="n11" value="0">
                         <label for="n11">Tidak</label><br>
                         </div>
                        </td>
                    </tr>
                    <tr>
                        <td style="vertical-align:middle">12</td>
                        <td style="vertical-align:middle">Saya tidak mencuci tangan dengan sabun setelah tiba di rumah</td>
                        <td>
                         <div style="display:inline-block">
                         <input type="radio" id="q12" name="y12" value="1">
                         <label for="y3">Ya</label><br>
                         <input type="radio" id="q12" name="n12" value="0">
                         <label for="n12">Tidak</label><br>
                         </div>
                        </td>
                    </tr>
                    <tr>
                        <td style="vertical-align:middle">13</td>
                        <td style="vertical-align:middle">saya tidak menyediakan : tissue basah/antiseptic, masker dan sabun antiseptic bagi keluarga dirumah</td>
                        <td>
                         <div style="display:inline-block">
                         <input type="radio" id="q13" name="y13" value="1">
                         <label for="y3">Ya</label><br>
                         <input type="radio" id="q13" name="n13" value="0">
                         <label for="n13">Tidak</label><br>
                         </div>
                        </td>
                    </tr>
                    <tr>
                        <td style="vertical-align:middle">14</td>
                        <td style="vertical-align:middle">Saya tidak segera merendam pakaian kedalam air panas/sabun setelah keluar dari rumah</td>
                        <td>
                         <div style="display:inline-block">
                         <input type="radio" id="q14" name="y14" value="1">
                         <label for="y3">Ya</label><br>
                         <input type="radio" id="q14" name="n14" value="0">
                         <label for="n14">Tidak</label><br>
                         </div>
                        </td>
                    </tr>
                    <tr>
                        <td style="vertical-align:middle">15</td>
                        <td style="vertical-align:middle">Saya tidak segera mandi keramas setelah saya tiba dirumah</td>
                        <td>
                         <div style="display:inline-block">
                         <input type="radio" id="q15" name="y15" value="1">
                         <label for="y3">Ya</label><br>
                         <input type="radio" id="q15" name="n15" value="0">
                         <label for="n15">Tidak</label><br>
                         </div>
                        </td>
                    </tr>
                    <tr>
                        <td style="vertical-align:middle">16</td>
                        <td style="vertical-align:middle">saya tidak mensosialisasikan check list penilaian resiko pribadi ini kepada keluarga dirumah</td>
                        <td>
                         <div style="display:inline-block">
                         <input type="radio" id="q16" name="y16" value="1">
                         <label for="y3">Ya</label><br>
                         <input type="radio" id="q16" name="n16" value="0">
                         <label for="n16">Tidak</label><br>
                         </div>
                        </td>
                    </tr>
                    <tr>
                        <td style="vertical-align:middle">17</td>
                        <td style="vertical-align:middle">Saya dalam sehari tidak kena cahaya matahari minimal 15 menit</td>
                        <td>
                         <div style="display:inline-block">
                         <input type="radio" id="q17" name="y17" value="1">
                         <label for="y3">Ya</label><br>
                         <input type="radio" id="q17" name="n17" value="0">
                         <label for="n17">Tidak</label><br>
                         </div>
                        </td>
                    </tr>
                    <tr>
                        <td style="vertical-align:middle">18</td>
                        <td style="vertical-align:middle">saya tidak jalan kaki/berolahraga minimal 30 menit setiap hari</td>
                        <td>
                         <div style="display:inline-block">
                         <input type="radio" id="q18" name="y18" value="1">
                         <label for="y3">Ya</label><br>
                         <input type="radio" id="q18" name="n18" value="0">
                         <label for="n18">Tidak</label><br>
                         </div>
                        </td>
                    </tr>
                    <tr>
                        <td style="vertical-align:middle">19</td>
                        <td style="vertical-align:middle">saya jarang minum vitamin C & E, dan kurang tidur</td>
                        <td>
                         <div style="display:inline-block">
                         <input type="radio" id="q19" name="y19" value="1">
                         <label for="y3">Ya</label><br>
                         <input type="radio" id="q19" name="n19" value="0">
                         <label for="n19">Tidak</label><br>
                         </div>
                        </td>
                    </tr>
                    <tr>
                        <td style="vertical-align:middle">20</td>
                        <td style="vertical-align:middle">usia saya di atas 60 tahun</td>
                        <td>
                         <div style="display:inline-block">
                         <input type="radio" id="q20" name="y20" value="1">
                         <label for="y3">Ya</label><br>
                         <input type="radio" id="q20" name="n20" value="0">
                         <label for="n20">Tidak</label><br>
                         </div>
                        </td>
                    </tr>
                    <tr>
                        <td style="vertical-align:middle">21</td>
                        <td style="vertical-align:middle">saya mempunyai penyakit : jantung/diabetes/gangguan pernapasan kronik </td>
                        <td>
                         <div style="display:inline-block">
                         <input type="radio" id="q21" name="y21" value="1">
                         <label for="y3">Ya</label><br>
                         <input type="radio" id="q21" name="n21" value="0">
                         <label for="n21">Tidak</label><br>
                         </div>
                        </td>
                    </tr>
        </tbody>
    </table>

        <div class="col-xs-12 col-sm-12 col-md-12 text-center">

                <button type="submit" class="btn btn-danger">Cek Hasil</button>

        </div>

    </div>

   

</form>
 
</center>


@endsection
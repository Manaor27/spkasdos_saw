<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="https://eclass.ukdw.ac.id/images/favicon.png" type="image/png" />
  <title>Beranda</title>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
    @extends('layouts.app')
    @section('content')
    <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Beranda</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item active"><a href="home">Beranda</a></li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <!-- Main content -->
    <section class="content">
        <!-- Main row -->
        <div class="card-body">
                                        <p class="card-text">
                                            Metode Simple Additive Weighting (SAW) sering juga dikenal istilah metode
                                            penjumlahan terbobot. Konsep dasar metode SAW adalah mencari penjumlahan
                                            terbobot dari rating kinerja pada setiap alternatif pada semua atribut
                                            (Fishburn 1967). SAW dapat dianggap sebagai cara yang paling mudah dan
                                            intuitif untuk menangani masalah Multiple Criteria Decision-Making MCDM,
                                            karena fungsi linear additive dapat mewakili preferensi pembuat keputusan
                                            (Decision-Making, DM). Hal tersebut dapat dibenarkan, namun, hanya ketika
                                            asumsi preference independence (Keeney & Raiffa 1976) atau preference
                                            separability (Gorman 1968) terpenuhi.
                                        </p>
                                        <hr>
                                        <p class="card-text">
                                            Langkah Penyelesaian Simple Additive Weighting (SAW) adalah sebagai berikut
                                            :
                                        </p>
                                        <ol type="1">
                                            <li>Menentukan kriteria-kriteria yang akan dijadikan acuan dalam pengambilan
                                                keputusan, yaitu Ci</i>
                                            <li>Menentukan rating kecocokan setiap alternatif pada setiap kriteria (X).
                                            </li>
                                            <li>Membuat matriks keputusan berdasarkan kriteria(Ci), kemudian melakukan
                                                normalisasi matriks berdasarkan persamaan yang disesuaikan dengan jenis
                                                atribut (atribut keuntungan ataupun atribut biaya) sehingga diperoleh
                                                matriks ternormalisasi R.</li>
                                            <li>Hasil akhir diperoleh dari proses perankingan yaitu penjumlahan dari
                                                perkalian matriks ternormalisasi R dengan vektor bobot sehingga
                                                diperoleh nilai terbesar yang dipilih sebagai alternatif terbaik
                                                (Ai)sebagai solusi</li>
                                        </ol>
                                    </div>
      </div>
    </section>
    @endsection
</body>
</html>
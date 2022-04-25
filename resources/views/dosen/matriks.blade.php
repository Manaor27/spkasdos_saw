<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="https://eclass.ukdw.ac.id/images/favicon.png" type="image/png" />
  <title>Matriks</title>
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
            <h1 class="m-0">Matriks</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="home">Beranda</a></li>
              <li class="breadcrumb-item active">Matriks</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <!-- Main content -->
    <section class="content">
        <!-- Main row -->
          <div class="card">
            <div class="card-header">
                <h3 class="card-title">
                    <b>Matriks Keputusan (X) & Ternormalisasi (R)</b>
                    <br>
                    <br>
                    <br>
                    Melakukan perhitungan normalisasi untuk mendapatkan matriks nilai ternormalisasi (R), dengan ketentuan : Untuk normalisasi nilai, jika faktor/attribute kriteria bertipe cost maka digunakan rumusan: Rij = ( min{Xij}/Xij ) sedangkan jika faktor/attribute kriteria bertipe benefit digunakan rumusan: Rij = ( Xij/max{Xij} )
                    <br>
                </h3>
            </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th rowspan="2" style="width: 30%">Alternatif</th>
                      <th colspan="4">Kriteria</th>
                    </tr>
                    <tr>
                        <th>C1</th>
                        <th>C2</th>
                        <th>C3</th>
                    </tr>
                  </thead>
                  @php
                    $A = 1;
                  @endphp
                  <tbody>
                    @foreach($x as $data)
                    <tr>
                      <td>A{{ $A++ }}</td>
                      <td style="width: 28%">{{ $data->C1 }}</td>
                      <td style="width: 28%">{{ $data->C2 }}</td>
                      <td>{{ $data->C3 }}</td>
                    </tr>
                    @endforeach
                  </tbody>
                  <tfoot>
                      <tr><td colspan="4">Matriks Keputusan (X)</td></tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
            <div class="card">
              <div class="card-body p-0">
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th rowspan="2" style="width: 30%">Alternatif</th>
                      <th colspan="3">Kriteria</th>
                    </tr>
                    <tr>
                        <th>C1</th>
                        <th>C2</th>
                        <th>C3</th>
                    </tr>
                  </thead>
                  @php
                    $R = array();
                    $a = 0;
                  @endphp
                  <tbody>
                    @foreach($r as $row)
                    <tr>
                      <td>A{{ ++$a }}</td>
                      <td style="width: 28%">{{round($row->C1, 2)}}</td>
                      <td style="width: 28%">{{round($row->C2, 2)}}</td>
                      <td>{{round($row->C3, 2)}}</td>
                    </tr>
                    @endforeach
                  </tbody>
                  <tfoot>
                      <tr><td colspan="4">Matriks Ternormalisasi (R)</td></tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
      </div>
    </section>
    @endsection
</body>
</html>
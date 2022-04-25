<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="https://eclass.ukdw.ac.id/images/favicon.png" type="image/png" />
  <title>Nilai Preferensi</title>
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
            <h1 class="m-0">Nilai Preferensi</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="home">Beranda</a></li>
              <li class="breadcrumb-item active">Nilai Preferensi</li>
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
                    <b>Tabel Nilai Preferensi</b>
                    <br>
                    <br>
                    <br>
                    <br>
                    Nilai preferensi (P) merupakan penjumlahan dari perkalian matriks ternormalisasi R dengan vektor bobot W.
                </h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th style="width: 10px">No</th>
                      <th>Alternatif</th>
                      <th>Hasil</th>
                    </tr>
                  </thead>
                    <?php
                      $P = array();
                      $b = count($W);
                      $no = 1;
                      echo "<tbody>";
                      foreach($R as $i => $r){
                        for($j = 0; $j < $b; $j++){
                          $P[$i] = (isset($P[$i]) ? $P[$i] : 0) + $r[$j] * ($W[$j]/100);
                        }
                        echo "<tr>
                          <td>". $no++ .".</td>
                          <td>A". $i ."</td>
                          <td>". $P[$i] ."</td>
                        </tr>";
                      }
                      echo "</tbody>";
                    ?>
                  <tfoot>
                      <tr><td colspan="4">Nilai Preferensi (P)</td></tr>
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
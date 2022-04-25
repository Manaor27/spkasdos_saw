<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="https://eclass.ukdw.ac.id/images/favicon.png" type="image/png" />
  <title>Bobot & Kriteria</title>
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
            <h1 class="m-0">Bobot & Kriteria</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="home">Beranda</a></li>
              <li class="breadcrumb-item active">Bobot & Kriteria</li>
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
                    <b>Tabel Bobot & Kriteria</b>
                    <br>
                    <br>
                    <br>
                    <br>
                    Pengambil keputusan memberi bobot preferensi dari setiap kriteria dengan masing-masing jenisnya (keuntungan/benefit atau biaya/cost):
                </h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th style="width: 10px">No</th>
                      <th>Simbol</th>
                      <th>Kriteria</th>
                      <th>Bobot</th>
                      <th>Atribut</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  @php
                    $no = 1;
                    $c = 1;
                  @endphp
                  <tbody>
                  @foreach($kriteria as $k)
                    <tr>
                      <td>{{ $no++ }}</td>
                      <td>C{{ $c++ }}</td>
                      <td>{{ $k->kriteria }}</td>
                      <td><span class="badge bg-danger">{{ $k->bobot }}%</span></td>
                      <td>{{ $k->atribut }}</td>
                      <td><a href="{{url('/editKriteria/'.$k->id)}}" type="button" class="btn btn-primary">Edit</a></td>
                    </tr>
                  @endforeach
                  </tbody>
                  <tfoot>
                      <tr><td colspan="6">Tabel Kriteria Ci</td></tr>
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
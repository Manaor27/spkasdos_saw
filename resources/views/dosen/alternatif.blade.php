<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="https://eclass.ukdw.ac.id/images/favicon.png" type="image/png" />
  <title>Alternatif</title>
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
            <h1 class="m-0">Alternatif</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="home">Beranda</a></li>
              <li class="breadcrumb-item active">Alternatif</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <!-- Main content -->
    <section class="content">
        <!-- Main row -->
        <div class="row">
          <div class="col-12">
          <div class="card">
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Simbol</th>
                      <th>Nama</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  @php
                    $no = 0;
                    $A = 0;
                  @endphp
                  <tbody>
                    @foreach($alter as $a)
                    <tr>
                      <td>{{ ++$no }}</td>
                      <td>A{{ ++$A }}</td>
                      <td>{{$a->user->name}}</td>
                      <td>
                        <div class="btn-group">
                          <button type="button" class="btn btn-info dropdown-toggle dropdown-icon" data-toggle="dropdown">
                              Aksi 
                          </button>
                          <div class="dropdown-menu">
                            <a class="dropdown-item" href="transkrip/{{$a->transkrip}}" target="_BLANK">Lihat Transkrip Nilai</a>
                            <a class="dropdown-item" href="lamaran/{{$a->lamaran}}" target="_BLANK">Lihat Surat Lamaran</a>
                            <div class="dropdown-divider"></div>
                            <!--a class="dropdown-item" href="#">Edit</a-->
                            <a class="dropdown-item" href="{{url('/hapusAlternatif/'.$a->id)}}" onclick="return confirm('Apakah Yakin Ingin Menghapus Data Ini?')">
                              Hapus
                            </a>
                          </div>
                        </div>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                  <tfoot>
                    <tr><td colspan="4">Tabel Alternatif Ai</td></tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
        <!-- /.row -->
      </div>
    </section>
    @endsection
</body>
</html>
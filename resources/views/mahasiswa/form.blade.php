<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="https://eclass.ukdw.ac.id/images/favicon.png" type="image/png" />
  <title>Form Pendaftaran</title>
</head>
  <body class="hold-transition layout-top-nav">
    @extends('layouts.panel')
    @section('content')
    <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0"> Form Pendaftaran</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="home">Beranda</a></li>
              <li class="breadcrumb-item active">Form Pendaftaran</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">

            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Form Pendaftaran</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="POST" action="simpanData" enctype="multipart/form-data">
                  @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label>Indeks Prestasi Kumulatif</label>
                    <input type="text" class="form-control" placeholder="Input IPK" name="ipk" required>
                  </div>
                  <div class="form-group">
                    <label>Indeks Prestasi Semester</label>
                    <input type="text" class="form-control" placeholder="Input IPS" name="ips" required>
                  </div>
                  <div class="form-group">
                    <label>Nilai Matakuliah Jaringan Komputer</label>
                    <select name="nilai" class="form-control" required>
                      <option value="4">A</option>
                      <option value="3.7">A-</option>
                      <option value="3.3">B+</option>
                      <option value="3">B</option>
                      <option value="2.7">B-</option>
                      <option value="2.3">C+</option>
                      <option value="2">C</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label>Transkrip Nilai</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" name="transkrip" required>
                        <label class="custom-file-label">Pilih File</label>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label>Surat Lamaran</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" name="lamaran" required>
                        <label class="custom-file-label">Pilih File</label>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
    @endsection
  </body>
</html>
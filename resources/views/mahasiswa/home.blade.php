<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="https://eclass.ukdw.ac.id/images/favicon.png" type="image/png" />
  <title>Beranda</title>
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
            <h1 class="m-0"> Beranda</h1>
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
    <div class="content">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">

            <div class="card card-primary card-outline">
              <div class="card-header">
                <h5 class="card-title m-0">Selamat Datang di Pendaftaran Asisten Matakuliah Jaringan Komputer!!</h5>
              </div>
              <div class="card-body">
                <h6 class="card-title">Jika anda berminat untuk mendaftar silahkan pahami ketentuan berikut:</h6>
                <br>
                <br>
                <p class="card-text">
                  <b>Tugas Asisten Dosen:</b><br>
                  1. Membantu dosen dalam mengkoordinasi kelas perkuliahan. <br>
                  2. Membantu memeriksa tugas mahasiswa yang mengambil matakuliah ini. <br>
                  3. Jika dosen berhalangan mengajar, maka Asisten harus bisa membantu dalam mengajar. <br>
                  4. Membuat portal tugas dan pengumuman di eclass.
                  <br>
                  <br>
                  Jika sudah memahami ketentuan diatas, silahkan daftar dan isi syarat pendaftaran yang diperlukan melalui tombol dibawah ini:
                  <hr>
                </p>
                <a href="#" class="btn btn-block btn-primary">Daftar</a>
              </div>
            </div>
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
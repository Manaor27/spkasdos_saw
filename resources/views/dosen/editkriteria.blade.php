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
        <!-- general form elements -->
        <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Edit Kriteria</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="POST" action="/simpanKriteria/{{$k->id}}">
                @csrf
                @method('PUT')
                <div class="card-body">
                  <div class="form-group">
                    <label>Kriteria</label>
                    <input type="text" class="form-control" placeholder="Input Kriteria" name="kriteria" value="{{ $k->kriteria }}">
                  </div>
                  <div class="form-group">
                    <label>Bobot</label>
                    <input type="number" class="form-control" placeholder="Input Bobot" name="bobot" value="{{ $k->bobot }}">
                  </div>
                  <div class="form-group">
                    <label>Atribut</label>
                    <select name="atribut" class="form-control">
                        @if($k->atribut=='cost')
                        <option value="cost" selected>cost</option>
                        <option value="benefit">benefit</option>
                        @else
                        <option value="cost">cost</option>
                        <option value="benefit" selected>benefit</option>
                        @endif
                    </select>
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
    </section>
    @endsection
</body>
</html>
@extends('layout.Layout.template')

@section('content')
    
<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Blank Page</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Blank Page</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">

    <!-- Default box -->
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Daftar Kedaraan</h3>

        <div class="card-tools">
          <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
            <i class="fas fa-minus"></i>
          </button>
          <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
            <i class="fas fa-times"></i>
          </button>
        </div>
      </div>
      <div class="card-body">
        <table class="table">
          <thead>
            <tr>
              <th>No. Polisi</th>
              <th>Merk</th>
              <th>Jenis</th>
              <th>Tahun Buat</th>
              <th>Warna</th> 
            </tr>
          </thead>
          <tbody>
            @foreach ($kendaraan as $no_pol => $k)
              <tr>
                <td>{{$k->no_pol}}</td>
                <td>{{$k->merk}}</td>
                <td>{{$k->jenis}}</td>
                <td>{{$k->thn_buat}}</td>
                <td>{{$k->warna}}</td>
              </tr>
            @endforeach
          </tbody>
          <tfoot>
            <tr>
              <th>Apa</th>
              <th>Saja</th>
              <th>Bolehh,</th>
              <th>Apasih</th>
              <th>Yang</th>
              <th>Gak</th>
              <th>Boleh??</th> 
            </tr>
          </tfoot>
        </table>
      </div>
      <!-- /.card-body -->
      <div class="card-footer">
        Footer
      </div>
      <!-- /.card-footer-->
    </div>
    <!-- /.card -->

  </section>

@endsection
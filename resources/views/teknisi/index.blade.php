@extends('layouts.master2')

@section('title')
Data Instore Kulkas
@endsection

@section('link')
    <link rel="stylesheet" href="vendors/datatables.net-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="vendors/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css">
@endsection

@section('breadcumb')
<div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1><i class="fa fa-users"></i> Teknisi</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="#">Teknisi</a></li>
                            <li><a class="active">Data Teknisi</a></li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
@endsection

@section('content')

    <div class="animated fadeIn">
                <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Data Teknisi</strong>
                                <a class="btn btn-primary btn-sm pull-right" href="{{ route('teknisi.create') }}"><i class="fa fa-plus"></i> Tambah</a>
                                 <a style="margin-right: 5px" class="btn btn-secondary btn-sm pull-right" href=""><i class="fa fa-print"></i> Cetak</a>
                            </div>
                            <div class="card-body">

                                <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th width="10">No</th>
                                            <th width="200">Kode Teknisi</th>
                                            <th>Nama Teknisi</th>
                                            <th style="width: 130px;">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $no = 0;?>
                                        @foreach($teknisis as $teknisi)
                                        <?php $no++ ;?>
                                        <tr>
                                            <td>{{ $no }}</td>
                                            <td>{{ $teknisi -> kode_teknisi }}</td>
                                            <td>{{ $teknisi -> nama_teknisi }}</td>
                                            <td>
                                                <a class="btn btn-warning btn-sm" href="{{ route('teknisi.edit', $teknisi) }}"><i class="fa fa-edit"></i> Ubah</a>
                                                <div class="pull-right">
                                                <form action="{{ route('teknisi.destroy', $teknisi) }}" method="POST">
                                                    {{ csrf_field() }}
                                                    {{ method_field('DELETE') }}
                                                    <button class="btn btn-danger btn-sm" type="submit" onclick="return myFunction()"><i class="fa fa-trash"></i> Hapus</button>
                                                   <script>
                                                      function myFunction() {
                                                          if(!confirm("Apakah anda yakin?"))
                                                          event.preventDefault();
                                                      }
                                                    </script>
                                                    
                                                </form>
                                                </div>
                                            </td>
                                        </tr>
                                        @endforeach
                                       
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>


                </div>
            </div><!-- .animated -->

@endsection

@section('js')
<!--         <script src="vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="vendors/datatables.net-buttons/js/buttons.colVis.min.js"></script> -->
    <script src="assets/js/init-scripts/data-table/datatables-init.js"></script>

@endsection
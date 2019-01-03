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
                        <h1><i class="fa fa-plug"></i> Kulkas</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="#">Kulkas</a></li>
                            <li><a class="active">Data Istore</a></li>
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
                                <strong class="card-title">Data Instore</strong>
                                <a class="btn btn-primary btn-sm pull-right" href="{{ route('kulkas.create') }}"><i class="fa fa-plus"></i> Tambah</a>
                                 <a style="margin-right: 5px" class="btn btn-secondary btn-sm pull-right" href="{{ route('kulkas.pdf') }}"><i class="fa fa-print"></i> Cetak</a>
                            </div>
                            <div class="card-body">

                                <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Nomor Asset</th>
                                            <th>Nomor Seri</th>
                                            <th>Tipe Kulkas</th>
                                            <th>Kondisi</th>
                                            <th>Tanggal Masuk</th>
                                            <th style="width: 130px;">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($kulkas as $kulkas)
                                        <tr>
                                            <td>{{ $kulkas -> nomor_asset }}</td>
                                            <td>{{ $kulkas -> nomor_seri }}</td>
                                            <td>{{ $kulkas -> tipe -> nama_tipe }}</td>
                                            <td>{{ $kulkas -> kondisi -> nama_kondisi }}</td>
                                            <td>{{ $kulkas -> tgl_masuk->format('d-m-Y') }}</td>
                                            <td>
                                                <a class="btn btn-warning btn-sm" href="{{ route('kulkas.edit', $kulkas) }}"><i class="fa fa-edit"></i> Ubah</a>
                                                <div class="pull-right">
                                                <form action="{{ route('kulkas.delete', $kulkas) }}" method="POST">
                                                    {{ csrf_field() }}
                                                    {{ method_field('DELETE') }}
                                                    <button class="btn btn-danger btn-sm" type="submit"><i class="fa fa-trash"></i> Hapus</button>
                                                   
                                                    
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
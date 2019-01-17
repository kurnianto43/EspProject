@extends('layouts.master2')

@section('link')
<link rel="stylesheet" href="{{ asset('vendors/chosen/chosen.min.css') }}">
<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
@endsection

@section('script')
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
@endsection

@section('breadcumb')
<div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1><i class="fa fa-users"></i> Jenis Masalah</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="#">Jenis Masalah</a></li>
                            <li class="active">Ubah Data</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
@endsection

@section('content')

    <div class="row">
                            <div class="col-lg-8 offset-lg-2">
                                <div class="card">
                                    <div class="card-header">
                                        <strong>Form Ubah Data</strong>
                                    </div>
                                    <div class="card-body">
                                        <div class="card-title">
                                            <h3 class="text-center title-2">Ubah Data Jenis Masalah</h3>
                                        </div>
                                        <hr>
                                        <form action="{{ route('jenismasalah.update', $jenismasalah) }}" method="POST" novalidate="novalidate">
                                            {{ csrf_field() }}
                                            {{ method_field('PATCH') }}
                                            <div class="form-group">
                                                <label for="kode_masalah" class="control-label mb-1">Kode Masalah</label>
                                                <input id="kode_masalah" name="kode_masalah" value="{{ $jenismasalah->kode_masalah }}" type="text" class="form-control" aria-required="true" aria-invalid="false">
                                            </div>
                                            <div class="form-group">
                                                <label for="nama_masalah" class="control-label mb-1">Nama Tipe</label>
                                                <input id="nama_masalah" name="nama_masalah" value="{{ $jenismasalah->nama_masalah }}" type="text" class="form-control" aria-required="true" aria-invalid="false">
                                            </div>
                                            <div>
                                                <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">
                                                    <i class="fa fa-lock fa-save"></i>&nbsp;
                                                    <span id="payment-button-amount">Simpan</span>
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

@endsection

@section('js')


@endsection
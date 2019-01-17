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
                        <h1><i class="fa fa-users"></i> Teknisi</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="#">Teknisi</a></li>
                            <li class="active">Tambah Data</li>
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
                                        <strong>Form Tambah Data</strong>
                                    </div>
                                    <div class="card-body">
                                        <div class="card-title">
                                            <h3 class="text-center title-2">Tambah Data Teknisi</h3>
                                        </div>
                                        <hr>
                                        <form action="{{ route('jenisperbaikan.store') }}" method="POST" novalidate="novalidate">
                                            {{ csrf_field() }}
                                            <div class="form-group">
                                                <label for="kode_jenis_perbaikan" class="control-label mb-1">Kode Jenis Perbaikan</label>
                                                <input id="kode_jenis_perbaikan"  name="kode_jenis_perbaikan" type="text" class="form-control" aria-required="true" aria-invalid="false">
                                            </div>
                                            <div class="form-group">
                                                <label for="nama_jenis_perbaikan" class="control-label mb-1">Nama Jenis Perbaikan</label>
                                                <input id="nama_jenis_perbaikan" name="nama_jenis_perbaikan" type="text" class="form-control" aria-required="true" aria-invalid="false">
                                            </div>
                                            <div class="form-group">
                                                <label for="keterangan_jenis_perbaikan" class="control-label mb-1">Keterangan Jenis Perbaikan</label>
                                                <textarea name="keterangan_jenis_perbaikan" class="form-control" id="" cols="20" rows="3"></textarea>
                                            </div>
                                            <div class="form-group">
                                                <label for="biaya_jasa" class="control-label mb-1">Biaya Jasa</label>
                                                <input id="biaya_jasa" name="biaya_jasa" type="text" class="form-control" aria-required="true" aria-invalid="false">
                                            </div>
                                            <div>
                                                <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">
                                                    <i class="fa fa-lock fa-save"></i>&nbsp;
                                                    <span id="payment-button-amount">Simpan</span>
                                                    <span id="payment-button-sending" style="display:none;">Sending…</span>
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
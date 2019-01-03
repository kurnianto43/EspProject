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
                        <h1><i class="fa fa-plug"></i> Kulkas</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="#">Kulkas</a></li>
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
                                            <h3 class="text-center title-2">Tambah Data Kulkas</h3>
                                        </div>
                                        <hr>
                                        <form action="{{ route('kulkas.store') }}" method="POST" novalidate="novalidate">
                                            {{ csrf_field() }}
                                            <div class="form-group">
                                                <label for="nomor_asset" class="control-label mb-1">Nomor Asset</label>
                                                <input id="nomor_asset"  name="nomor_asset" type="text" class="form-control" aria-required="true" aria-invalid="false">
                                            </div>
                                            <div class="form-group">
                                                <label for="nomor_seri" class="control-label mb-1">Nomor Seri</label>
                                                <input id="nomor_seri" name="nomor_seri" type="text" class="form-control" aria-required="true" aria-invalid="false">
                                            </div>
                                            <div class="form-group">
                                                <label for="" class="control-label mb-1">Tanggal Masuk</label>
                                                <input id="" name="tgl_masuk" type="date" class="form-control">

                                            </div>
                                            <div class="row"> 
                                                <div class="col-xs-6 col-sm-6">
                                                    <div class="form-group">
                                                    <label for="tipe_id" class="control-label mb-1">Tipe Kulkas</label>
                                                    <select name="tipe_id" id="tipe_id" class="form-control">
                                                        <option value="">--Pilih tipe--</option>
                                                        @foreach($tipes as $tipe)
                                                        <option value="{{ $tipe -> id }}">{{ $tipe -> nama_tipe }}</option>
                                                    @endforeach
                                                    </select>
                                                    </div>
                                                </div>
                                                <div class="col-xs-6 col-sm-6">
                                                    <div class="form-group">
                                                        <label for="" class="control-label mb-1">Kondisi</label>

                                                            <select data-placeholder="Choose a Country..." class="standardSelect form-control" tabindex="1">
                                                                @foreach($kondisis as $kondisi)
                                                                    <option value="{{ $kondisi -> id }}">{{ $kondisi -> nama_kondisi }}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                </div>
                                            </div>
                                                
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
<script src="{{ asset('vendors/chosen/chosen.jquery.min.js') }}"></script>
<script>
    jQuery(document).ready(function() {
        jQuery(".standardSelect").chosen({
            disable_search_threshold: 10,
            no_results_text: "Oops, nothing found!",
            width: "100%"
        });
    });
</script>
@endsection
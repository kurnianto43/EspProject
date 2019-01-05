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
                        <h1><i class="fa fa-plug"></i> Suku Cadang</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="#">Suku Cadang</a></li>
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
                                        <form action="{{ route('sukucadang.update', $sukucadang) }}" method="POST" novalidate="novalidate">
                                            {{ csrf_field() }}
                                            {{ method_field('PATCH') }}
                                            <div class="form-group">
                                                <label for="nomor_suku_cadang" class="control-label mb-1">Nomor Suku Cadang</label>
                                                <input id="nomor_suku_cadang"  name="nomor_suku_cadang" value="{{ $sukucadang->nomor_suku_cadang }}" type="text" class="form-control" aria-required="true" aria-invalid="false">
                                            </div>
                                            <div class="form-group">
                                                <label for="nama_suku_cadang" class="control-label mb-1">Nama Suku Cadang</label>
                                                <input id="nama_suku_cadang" name="nama_suku_cadang" value="{{ $sukucadang->nama_suku_cadang }}" type="text" class="form-control" aria-required="true" aria-invalid="false">
                                            </div>
                                            <div class="form-group">
                                                <label for="jumlah_suku_cadang" class="control-label mb-1">Jumlah</label>
                                                <input id="jumlah_suku_cadang" name="jumlah_suku_cadang" value="{{ $sukucadang->jumlah_suku_cadang }}" type="text" class="form-control" aria-required="true" aria-invalid="false">
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
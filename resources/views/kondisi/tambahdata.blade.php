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
                        <h1><i class="fa fa-users"></i> Kondisi</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="#">Kondisi</a></li>
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
                                            <h3 class="text-center title-2">Tambah Data Kondisi</h3>
                                        </div>
                                        <hr>
                                        <form action="{{ route('kondisi.store') }}" method="POST" novalidate="novalidate">
                                            {{ csrf_field() }}
                                            <div class="form-group">
                                                <label for="nama_kondisi" class="control-label mb-1">Nama Kondisi</label>
                                                <input id="nama_kondisi" name="nama_kondisi" type="text" class="form-control" aria-required="true" aria-invalid="false">
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
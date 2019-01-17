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
                            <div class="col-lg-10">
                                <div class="card">
                                    <div class="card-header">
                                        <strong>Form Tambah Data</strong>
                                    </div>
                                    <div class="card-body">
                                        <div class="card-title">
                                            <h3 class="text-center title-2">Tambah Data Kulkas</h3>
                                        </div>
                                        <hr>
                                        <form action="" method="POST" novalidate="novalidate">
                                            {{ csrf_field() }}
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="nomor_asset" class="control-label mb-1">Nomor Perbaikan</label>
                                                        <input id="nomor_asset"  name="nomor_asset" type="text" class="form-control" aria-required="true" aria-invalid="false">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="tipe_id" class="control-label mb-1">Teknisi</label>
                                                        <select name="tipe_id" id="tipe_id" class="form-control">
                                                        <option value="">--Pilih Teknisi--</option>
                                                        <option value=""></option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                    <label for="tipe_id" class="control-label mb-1">Nomor Asset</label>
                                                    <select name="tipe_id" id="tipe_id" class="form-control">
                                                        <option value="">--Pilih Nomor Asset--</option>
                                                        <option value=""></option>
                                                    </select>
                                                    </div>
                                                </div>
                                                
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="tipe_id" class="control-label mb-1">Jenis Perbaikan</label>
                                                            <select name="tipe_id" id="tipe_id" class="form-control">
                                                            <option value="">--Pilih Jenis Perbaikan--</option>
                                                            <option value=""></option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="" class="control-label mb-1">Tanggal Perbaikan</label>
                                                        <input id="" name="tgl_masuk" type="date" class="form-control">

                                                    </div>
                                                </div>
                                            </div>
                                            
                                           
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="row"> 
                                                        <div class="col-xs-5 col-sm-5">
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <div class="form-group">
                                                                    <label for="tipe_id" class="control-label mb-1">Temuan Masalah</label>
                                                                    <select name="tipe_id" id="tipe_id" class="form-control">
                                                                        <option value="">--Pilih Masalah--</option>
                                                                        
                                                                        <option value=""></option>
                                                                    
                                                                    </select>
                                                                    </div>
                                                                
                                                                <a href="" style="margin-bottom: 10px" class="btn btn-primary btn-sm">Tambah</a>
                                                                <table  class="table table-bordered">
                                                                    <thead>
                                                                        <tr>
                                                                            <th scope="col">No</th>
                                                                            <th scope="col">Kode Masalah</th>
                                                                            <th scope="col">Nama Masalah</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr>
                                                                            <th scope="row">1</th>
                                                                            <td>Mark</td>
                                                                            <td>Otto</td>
                                                                            
                                                                        </tr>
                                                                        <tr>
                                                                            <th scope="row">2</th>
                                                                            <td>Jacob</td>
                                                                            <td>Thornton</td>
                                                                            
                                                                        </tr>
                                                                        <tr>
                                                                            <th scope="row">3</th>
                                                                            <td colspan="2">Larry the Bird</td>
                                                                            
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                                </div>
                                                            </div>           
                                                        </div>
                                                        <div class="col-xs-7 col-sm-7">
                                                            <div class="row">
                                                                <div class="col-md-8">
                                                                    <div class="form-group">
                                                                    <label for="tipe_id" class="control-label mb-1">Spare Part Dipakai</label>
                                                                    <select name="tipe_id" id="tipe_id" class="form-control">
                                                                        <option value="">--Pilih Sparepart--</option>
                                                                        
                                                                        <option value=""></option>
                                                                    
                                                                    </select>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label for="" class="control-label">Qty</label>
                                                                        <input type="number" value="1" min="1" class="form-control">
                                                                    </div>
                                                                </div>
                                                                <a href="" style="margin-left: 17px; margin-bottom: 10px;" class="btn btn-primary btn-sm">Tambah</a>
                                                                <table style="margin-right: 17px; margin-left: 17px" class="table table-bordered">
                                                                    <thead>
                                                                        <tr>
                                                                            <th scope="col">No</th>
                                                                            <th scope="col">Nomor Spare Part</th>
                                                                            <th scope="col">Nama Spare Part</th>
                                                                            <th scope="col">Qty</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr>
                                                                            <th>1</th>
                                                                            <td>Mark</td>
                                                                            <td>Otto</td>
                                                                            <td>1</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th>2</th>
                                                                            <td>Jacob</td>
                                                                            <td>Thornton</td>
                                                                            <td>1</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th>3</th>
                                                                            <td>Larry the Bird</td>
                                                                            <td>koko</td>
                                                                            <td>4</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>           
                                                        </div>
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
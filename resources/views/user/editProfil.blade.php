@extends('layouts.master2')

@section('link')
<link rel="stylesheet" href="{{ asset('vendors/chosen/chosen.min.css') }}">
<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
@endsection

@section('script')
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
@endsection


@section('content')

    <div class="row">
                            <div class="col-lg-8 offset-lg-2">
                                <div class="card">
                                    <div class="card-header">
                                        <strong>Form Ubah Profil</strong>
                                    </div>
                                    <div class="card-body">
                                        <div class="card-title">
                                            <h3 class="text-center title-2">Ubah Profil Singkat</h3>
                                        </div>
                                        <hr>
                                        <form action="{{ route('updateProfil') }}" method="POST" novalidate="novalidate" enctype="multipart/form-data">
                                            {{ csrf_field() }}
                                            <div class="form-group">
                                                <label for="nama" class="control-label mb-1">Nama</label>
                                                <input id="nama" value="{{ old('nama') ?? auth()->user()->nama }}"  name="nama" type="text" class="form-control" aria-required="true" aria-invalid="false">
                                            </div>
                                            <div class="form-group">
                                                <label for="avatar" class="control-label mb-1">Foto Profil</label>
                                                <input id="avatar" name="avatar" type="file" class="form-control" aria-required="true" aria-invalid="false">
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

@endsection
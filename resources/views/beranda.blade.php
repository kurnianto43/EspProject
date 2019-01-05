@extends('layouts.master2')

@section('title')
    Beranda
@endsection

@section('breadcumb')
    <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Beranda</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="#">Beranda</a></li>
                            <!-- <li><a href="#">Table</a></li>
                            <li class="active">Data table</li> -->
                        </ol>
                    </div>
                </div>
            </div>
        </div>
@endsection

@section('content')
<div class="col-lg-4 col-md-6">
                <div class="social-box kulkas">
                    <i class="fa fa-plug"></i>
                    <ul>
                        <li>
                            <span>Kulkas Instore</span>
                            
                        </li>
                        <li>
                            <span class="count">{{ $kulkasCount }}</span>
                        </li>
                    </ul>
                </div>
                <!--/social-box-->
            </div>
            <!--/.col-->


            <div class="col-lg-4 col-md-6">
                <div class="social-box perbaikan">
                    <i class="fa fa-cogs"></i>
                    <ul>
                        <li>
                            <span>Perbaikan</span>
                        </li>
                        <li>
                            <span class="count">100</span>
                        </li>
                    </ul>
                </div>
                <!--/social-box-->
            </div>
            <!--/.col-->


            <div class="col-lg-4 col-md-6">
                <div class="social-box pendapatan">
                    <i class="fa fa-archive"></i>
                    <ul>
                        <li>
                            <span>Pendapatan</span>
                        </li>
                        <li>
                            <span class="count">Rp 250.000.000</span>
                        </li>
                    </ul>
                </div>
                <!--/social-box-->
            </div>
            <!--/.col-->
            </div>
@endsection

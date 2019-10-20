@extends('layouts.app')

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="page-title-box">
                <div class="row align-items-center">
                    <div class="col-sm-6">
                        <h4 class="page-title">Detail Karyawan</h4>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0);">ERS</a></li>
                            <li class="breadcrumb-item"><a href="javascript:void(0);">Karyawan</a></li>
                            <li class="breadcrumb-item active">Detail</li>
                        </ol>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="mt-0 header-title">Data Lengkap Karyawan</h4>
                            <p class="text-muted m-b-30"></p>
                            <div class="wrapper-detail">
                                <div class="row">
                                    <div class="col-2">Nama</div>
                                    <div class="col">: {{ $user->name }}</div>
                                </div>
                                <div class="row">
                                    <div class="col-2">Email</div>
                                    <div class="col">: {{ $user->email }}</div>
                                </div>
                                <div class="row">
                                    <div class="col-2">No. Telpon</div>
                                    <div class="col">: {{ $user->phone }}</div>
                                </div>
                                <div class="row">
                                    <div class="col-2">Alamat</div>
                                    <div class="col">: {{ $user->address }}</div>
                                </div>
                                <div class="row">
                                    <div class="col-2">Role</div>
                                    <div class="col">: {{ $role }}</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('head-scripts')
    <style>
        .wrapper-detail{
            line-height: 1.9;
        }
    </style>
@endpush
@extends('layouts.app')

@section('content')
<div class="content-page">
    <div class="content">
        <div class="container-fluid">
            <div class="page-title-box">
                <div class="row align-items-center">
                    <div class="col-sm-6">
                        <h4 class="page-title">Tambah Karyawan</h4>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0);">ERS</a></li>
                            <li class="breadcrumb-item"><a href="javascript:void(0);">Karyawan</a></li>
                            <li class="breadcrumb-item active">Form</li>
                        </ol>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="mt-0 header-title">Form Penambahan Karyawan</h4>
                            <p class="text-muted m-b-30">Isi form dibawah ini dengan data lengkap untuk menambah karyawan.</p>
                            {!! Form::open(['route' => 'user.store', 'method' => 'POST']) !!}
                                <div class="form-group row">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Nama</label>
                                    <div class="col-sm-10">
                                        {!! Form::text('name', null, ['class' => $errors->has('name') ? 'form-control is-invalid' : 'form-control', 'required']) !!}
                                        @if ($errors->has('name'))
                                            <span class="invalid-feedback d-block">
                                                <strong>{{ $errors->first('name') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-email-input" class="col-sm-2 col-form-label">Email</label>
                                    <div class="col-sm-10">
                                        {!! Form::email('email', null, ['class' => $errors->has('email') ? 'form-control is-invalid' : 'form-control', 'required']) !!}
                                        @if ($errors->has('email'))
                                            <span class="invalid-feedback d-block">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-tel-input" class="col-sm-2 col-form-label">Telpon</label>
                                    <div class="col-sm-10">
                                        {!! Form::tel('phone', null, ['class' => $errors->has('phone') ? 'form-control is-invalid' : 'form-control', 'required']) !!}
                                        @if ($errors->has('phone'))
                                            <span class="invalid-feedback d-block">
                                                <strong>{{ $errors->first('phone') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Alamat</label>
                                    <div class="col-sm-10">
                                        {!! Form::text('address', null, ['class' => $errors->has('address') ? 'form-control is-invalid' : 'form-control', 'required']) !!}
                                        @if ($errors->has('address'))
                                            <span class="invalid-feedback d-block">
                                                <strong>{{ $errors->first('address') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-password-input" class="col-sm-2 col-form-label">Password</label>
                                    <div class="col-sm-10">
                                        {!! Form::password('password', ['class' => $errors->has('password') ? 'form-control is-invalid' : 'form-control', 'required']) !!}
                                        @if ($errors->has('password'))
                                            <span class="invalid-feedback d-block">
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Role</label>
                                    <div class="col-sm-10">
                                        {!! Form::select('role[]', $roleData, null, ['class' => 'form-control selectpicker text-capitalize', 'title' => 'Pilih role', 'multiple', 'required']) !!}
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-12 text-right">
                                        {!! Form::submit('Simpan', ['class' => 'btn btn-primary text-right']) !!}
                                    </div>
                                </div>
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer class="footer">© 2019 All Rights Reserved. <span class="d-none d-sm-inline-block"> Code with <i class="mdi mdi-heart text-danger"></i> by Arifin N</span>.</footer>
</div>
@endsection

@push('head-scripts')
<link href="https://themesbrand.com/veltrix/layouts/plugins/datatables/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css">
{{-- <link href="https://themesbrand.com/veltrix/layouts/plugins/datatables/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css"> --}}
<link href="https://themesbrand.com/veltrix/layouts/plugins/datatables/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="{{ asset('css/bootstrap-select.min.css') }}">
<style>
    .filter-option{ text-transform: capitalize; }
</style>
@endpush

@push('body-scripts')
<script src="https://themesbrand.com/veltrix/layouts/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="https://themesbrand.com/veltrix/layouts/plugins/datatables/dataTables.bootstrap4.min.js"></script>
<!-- Responsive examples -->
<script src="https://themesbrand.com/veltrix/layouts/plugins/datatables/dataTables.responsive.min.js"></script>
<script src="https://themesbrand.com/veltrix/layouts/plugins/datatables/responsive.bootstrap4.min.js"></script>
<script src="{{ asset('js/bootstrap-select.min.js') }}"></script>
<!-- Datatable init js -->
<script>
    $(document).ready(function() {
        $("#datatable").DataTable();
    });
</script>
@endpush
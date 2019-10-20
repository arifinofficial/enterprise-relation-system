@extends('layouts.app')

@section('content')
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
                                @include('user._form')
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('head-scripts')
<link rel="stylesheet" href="{{ asset('css/select2.min.css') }}">
{{-- <style>
    .filter-option{ text-transform: capitalize; }
</style> --}}
@endpush

@push('body-scripts')
<script src="{{ asset('js/select2.min.js') }}"></script>
<script>
$(document).ready(function() {
    $('.select2').select2();
});
</script>
@endpush
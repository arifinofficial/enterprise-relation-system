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
                            <h4 class="mt-0 header-title">Form Update Karyawan</h4>
                            <p class="text-muted m-b-30">Isi form dibawah ini dengan data lengkap untuk mengubah data karyawan.</p>
                            {!! Form::model($user, ['route' => ['user.update', $user->id], 'method' => 'PUT']) !!}
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
<link href="https://themesbrand.com/veltrix/layouts/plugins/datatables/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css">
{{-- <link href="https://themesbrand.com/veltrix/layouts/plugins/datatables/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css"> --}}
<link href="https://themesbrand.com/veltrix/layouts/plugins/datatables/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="{{ asset('css/select2.min.css') }}">
@endpush

@push('body-scripts')
<script src="https://themesbrand.com/veltrix/layouts/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="https://themesbrand.com/veltrix/layouts/plugins/datatables/dataTables.bootstrap4.min.js"></script>
<!-- Responsive examples -->
<script src="https://themesbrand.com/veltrix/layouts/plugins/datatables/dataTables.responsive.min.js"></script>
<script src="https://themesbrand.com/veltrix/layouts/plugins/datatables/responsive.bootstrap4.min.js"></script>
<script src="{{ asset('js/select2.min.js') }}"></script>
<!-- Datatable init js -->
<script>
    $(document).ready(function() {
        $("#datatable").DataTable();
        $('.select2').select2();
    });
    
</script>
@endpush
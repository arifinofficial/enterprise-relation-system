@extends('layouts.app')

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="page-title-box">
                <div class="row align-items-center">
                    <div class="col-sm-6">
                        <h4 class="page-title">Form Izin Kerja</h4>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0);">ERS</a></li>
                            <li class="breadcrumb-item"><a href="javascript:void(0);">Form Izin Kerja</a></li>
                            <li class="breadcrumb-item active">Form</li>
                        </ol>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="mt-0 header-title">Form Izin Kerja Karyawan</h4>
                            <p class="text-muted m-b-30">Isi form dibawah ini dengan lengkap untuk mengajukan permohon izin kerja.</p>
                            {!! Form::open(['route' => 'user.store', 'method' => 'POST', 'files' => true]) !!}
                                @include('submission._form')
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('head-scripts')
<link rel="stylesheet" href="{{ asset('css/bootstrap-datepicker.min.css') }}">
@endpush

@push('body-scripts')
<script src="{{ asset('js/bootstrap-datepicker.js') }}"></script>
<script src="{{ asset('js/bootstrap-filestyle.min.js') }}"></script>
<script>
    $(document).ready(function(){
        $("#date-range").datepicker({
            toggleActive: !0
        });

        $('select.csubmission').on('change', function(){
            var fileWrapper = $('.file-wrapper')

            if (this.value == '1') {
                fileWrapper.show(350)
            }else{
                fileWrapper.hide(350)
            }
        });
    });
</script>
@endpush
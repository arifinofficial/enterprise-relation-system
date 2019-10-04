@extends('layouts.app')

@section('content')
<div class="content-page">
    <div class="content">
        <div class="container-fluid">
            <div class="page-title-box">
                <div class="row align-items-center">
                    <div class="col-sm-6">
                        <h4 class="page-title">Data Karyawan</h4>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0);">ERS</a></li>
                            <li class="breadcrumb-item"><a href="javascript:void(0);">Karyawan</a></li>
                            <li class="breadcrumb-item active">Tabel</li>
                        </ol>
                    </div>
                    <div class="col-sm-6">
                        <div class="float-right d-none d-md-block">
                            <div class="dropdown">
                                <a href="{{ route('user.create') }}" class="btn btn-primary arrow-none waves-effect waves-light"><i class="mdi mdi-account-plus mr-2"></i> Tambah Karyawan</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="mt-0 header-title">Tabel Karyawan</h4>
                            <p class="text-muted m-b-30">Daftar list karyawan.</p>
                            <table id="datatable" class="table table-bordered nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <thead class="thead-light">
                                    <tr>
                                        <th>No.</th>
                                        <th>Nama</th>
                                        <th>Email</th>
                                        <th>No. Telpon</th>
                                        <th>Alamat</th>
                                        <th>Role</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    
                                </tbody>
                            </table>
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
<link href="https://themesbrand.com/veltrix/layouts/plugins/datatables/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css">
@endpush

@push('body-scripts')
<script src="https://themesbrand.com/veltrix/layouts/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="https://themesbrand.com/veltrix/layouts/plugins/datatables/dataTables.bootstrap4.min.js"></script>
<!-- Responsive examples -->
<script src="https://themesbrand.com/veltrix/layouts/plugins/datatables/dataTables.responsive.min.js"></script>
<script src="https://themesbrand.com/veltrix/layouts/plugins/datatables/responsive.bootstrap4.min.js"></script>
<!-- Datatable init js -->
<script>
    $(document).ready(function() {
        $("#datatable").DataTable({
            scrollX: true,
            processing: true,
            serverSide: true,
            ajax: "{{ route('api.users') }}",
            columns: [
                {data: 'id', name: 'id', render: function (data, type, row, meta) { return meta.row + meta.settings._iDisplayStart + 1;}},
                {data: 'name', name: 'name'},
                {data: 'email', name: 'email'},
                {data: 'phone', name: 'phone'},
                {data: 'address', name: 'address'},
                {data: 'roles', name: 'roles'},
                {data: 'action', name: 'action', orderable: false, searchable: false},
            ]
        });
    });
</script>
@endpush
@extends('templates.material.main')
@section('jquery') {{-- Including this section to override it empty. Using jQuery from webpack build --}} @endsection
@push('before-scripts')
    <script src="{{ mix('/js/home-one.js') }}"></script>
@endpush
@section('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.dataTables.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/dropzone.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css">
    <link rel="stylesheet" href="/vendor/wrappixel/material-pro/4.2.1/assets/plugins/toast-master/css/jquery.toast.css">
    <style>
        .dtp > .dtp-content > .dtp-date-view > header.dtp-header {
            background: #1e88e5;
            color: #fff;
            text-align: center;
            padding: 0.3em;
        }
        .dtp div.dtp-date, .dtp div.dtp-time {
            background: #1e88e5;
            text-align: center;
            color: #fff;
            padding: 10px;
        }
        .dtp .p10 > a {
            color: #fff;
            text-decoration: none;
        }
        .dtp table.dtp-picker-days tr > td > a.selected {
            background: #1e88e5;
            color: #fff;
        }
        #dtp_UpXtk{
            overflow-y: inherit;
            overflow-x: hidden;
        }
        .dropzone{
            border: none;
            background: none !important;
        }
        .dropzone-style{
            border: 1px dashed #ccc;
            border-radius: 10px;
        }
        .dz-message{
            height: 70px;
        }
        table.dataTable.dtr-inline.collapsed > tbody > tr[role="row"] > td:first-child:before, table.dataTable.dtr-inline.collapsed > tbody > tr[role="row"] > th:first-child:before {
            top: 15px;
            background-color: #26c6da ;
        }
    </style>
@endsection
@section('content')
    <section class="content-header">
        <h1>
            Autor
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">

            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'autors.store']) !!}

                        @include('autors.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection

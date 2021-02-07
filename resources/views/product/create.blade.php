@extends('layout')

@section('title', 'Contact')

@section('content')

<section class="content-header">
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper" >
    <!-- Content Header (Page header) -->
    <div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Crear producto</h1>
            </div><!-- /.col -->
        </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card card-primary card-outline">
                        <div class="card-header">
                        <h3 class="card-title">
                            <i class="fab fa-wpforms"></i>
                            Datos del producto
                        </h3>
                    </div>
                    <livewire:product-form />
                    <!-- /.card-body-->
                    </div>
                    <!-- /.card -->
                </div>
            </div><!-- /.row -->
        </div>
    </section><!-- /.content -->
    
@endsection


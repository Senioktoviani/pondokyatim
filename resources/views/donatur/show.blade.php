@extends('layouts.admin')
@section('header')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1 class="m-0">Show Data Donatur</h1>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Data Donatur</div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for=""> Nama Donatur</label>
                            <input type="text" name="nama" value="{{ $donatur->nama }}" class="form-control" readonly>
                        </div>
                        <div class="form-group">
                            <label for=""> Nominal Donatur</label>
                            <input type="text" name="nominal" value="{{ $donatur->nominal }}" class="form-control"
                                readonly>
                        </div>
                        <div class="form-group">
                            <label for=""> Tanggal Donatur</label>
                            <input type="text" name="tanggal" value="{{ $donatur->tanggal }}" class="form-control"
                                readonly>
                        </div>
                        <div class="form-group">
                            <label for=""> Telepon Donatur</label>
                            <input type="text" name="telepon" value="{{ $donatur->telepon }}" class="form-control"
                                readonly>
                        </div>
                        <div class="form-group">
                            <a href="{{ route('donatur.index') }}" class="btn btn-block btn-outline-primary">Kembali</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

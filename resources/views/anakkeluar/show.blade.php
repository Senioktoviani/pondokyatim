@extends('layouts.admin')
@section('header')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1 class="m-0">Show Data Anak Keluar</h1>
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
                    <div class="card-header">Data Anak Keluar</div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for=""> Nama Anak Keluar</label>
                            <input type="text" name="nama" value="{{ $anak2->nama }}" class="form-control" readonly>
                        </div>
                        <div class="form-group">
                            <label for=""> Jenis Kelamin</label>
                            <input type="text" name="jenis_kelamin" value="{{ $anak2->jenis_kelamin }}"
                                class="form-control" readonly>
                        </div>
                        <div class="form-group">
                            <label for=""> Keterangan</label>
                            <input type="text" name="keterangan" value="{{ $anak2->keterangan }}" class="form-control"
                                readonly>
                        </div>
                        <div class="form-group">
                            <a href="{{ route('anakkeluar.index') }}"
                                class="btn btn-block btn-outline-primary">Kembali</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

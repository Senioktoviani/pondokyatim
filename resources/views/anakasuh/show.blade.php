@extends('layouts.admin')
@section('header')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1 class="m-0">Show Data Anak Asuh</h1>
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
                    <div class="card-header">Data Anak Asuh</div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for=""> Nama Anak Asuh</label>
                            <input type="text" name="nama" value="{{ $anak->nama }}" class="form-control" readonly>
                        </div>
                        <div class="form-group">
                            <label for=""> Tempat Lahir</label>
                            <input type="text" name="tempat_lahir" value="{{ $anak->tempat_lahir }}"
                                class="form-control" readonly>
                        </div>
                        <div class="form-group">
                            <label for=""> Tanggal Lahir</label>
                            <input type="date" name="tgl_lahir" value="{{ $anak->tgl_lahir }}" class="form-control"
                                readonly>
                        </div>
                        <div class="form-group">
                            <label for=""> Jenis Kelamin</label>
                            <input type="text" name="jenis_kelamin" value="{{ $anak->jenis_kelamin }}"
                                class="form-control" readonly>
                        </div>
                        <div class="form-group">
                            <label for=""> Pendidikan</label>
                            <input type="text" name="pendidikan" value="{{ $anak->pendidikan }}" class="form-control"
                                readonly>
                        </div>
                        <div class="form-group">
                            <label for=""> Nama Wali</label>
                            <input type="text" name="nama_ortu_wali" value="{{ $anak->nama_ortu_wali }}"
                                class="form-control" readonly>
                        </div>
                        <div class="form-group">
                            <label for=""> Alamat Tinggal</label>
                            <input type="text" name="alamat_tinggal" value="{{ $anak->alamat_tinggal }}"
                                class="form-control" readonly>
                        </div>
                        <div class="form-group">
                            <a href="{{ route('anakasuh.index') }}" class="btn btn-block btn-outline-primary">Kembali</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

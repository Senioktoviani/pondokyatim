@extends('layouts.admin')

@section('header')
    <br><br>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="row-md-50">
                    <div class="card">
                        <div class="card-header">Profil Pondok Yatim</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('content')
    <br>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-11">
                <div class="card">


                    <div class="card-body">
                        <div class="image">
                            <p style="text-align:justify;"><img src="{{ asset('assets/dist/img/logo2.jpg') }}"
                                    style="float:left; margin:0 10px 10px 0;" />

                            <table>
                                <br>
                                <tr>
                                    <td>Nama Pondok Yatim</td>
                                    <td>:</td>
                                    <td>Pondok Yatim Al-Hilal</td>
                                </tr>
                                <tr>
                                    <td>Alamat</td>
                                    <td>:</td>
                                    <td>Jalan Situ Tarate Jl. Cibaduyut,Cangkuang Kulon, Kec. Dayeuhkolot, Kota Bandung,
                                        Jawa Barat</td>
                                </tr>
                                <tr>
                                    <td>Email</td>
                                    <td>:</td>
                                    <td>yatimalhilal@gmail.com</td>
                                </tr>
                                <tr>
                                    <td>No Telepon</td>
                                    <td>:</td>
                                    <td>0884372832904</td>
                                </tr>
                                <tr>
                                    <td>Kode Pos</td>
                                    <td>:</td>
                                    <td>40265</td>
                                </tr>
                            </table>
                            </p>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
    </div>
@endsection

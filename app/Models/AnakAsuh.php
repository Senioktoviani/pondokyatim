<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AnakAsuh extends Model
{
    use HasFactory;

    protected $visible = ['nama', 'tempat_lahir', 'tgl_lahir', 'jenis_kelamin',
        'pendidikan', 'nama_ortu_wali', 'alamat_tinggal'];

    protected $fillable = ['nama', 'tempat_lahir', 'tgl_lahir', 'jenis_kelamin',
        'pendidikan', 'nama_ortu_wali', 'alamat_tinggal'];

    public $timestamps = true;

}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AnakKeluar extends Model
{
    use HasFactory;
    protected $visible = ['nama', 'jenis_kelamin', 'keterangan'];

    protected $fillable = ['nama', 'jenis_kelamin', 'keterangan'];

    public $timestamps = true;

}

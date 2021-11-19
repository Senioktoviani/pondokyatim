<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Donatur extends Model
{
    use HasFactory;
    protected $visible = ['nama', 'nominal', 'tanggal', 'telepon'];

    protected $fillable = ['nama', 'nominal', 'tanggal', 'telepon'];

    public $timestamps = true;
}

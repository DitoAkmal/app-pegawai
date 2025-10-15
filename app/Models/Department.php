<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;

    protected $table = 'departments'; // pastikan nama tabel sesuai di database

    protected $fillable = [
        'nama_departemen'
    ];
}
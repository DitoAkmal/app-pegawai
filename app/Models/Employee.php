<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $table = 'employees';

    protected $fillable = [
        'nama_lengkap',
        'email',
        'telepon',
        'alamat',
        'tanggal_masuk',
        'departemen_id',
        'jabatan_id'
    ];

    // Relasi ke Department dan Position
    public function department()
    {
        return $this->belongsTo(Department::class, 'departemen_id');
    }

    public function position()
    {
        return $this->belongsTo(Position::class, 'jabatan_id');
    }
}

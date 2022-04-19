<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Parkir extends Model
{
    protected $table = 'parkir';
    protected $primaryKey = 'nomor_tiket';
    protected $fillable = ['nomor_polisi', 'jenis_kendaraan', 'tgl_masuk', 'tgl_keluar', 'jam_masuk', 'jam_keluar'];
    use HasFactory;
}
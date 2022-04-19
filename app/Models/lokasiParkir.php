<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class lokasiParkir extends Model
{
    protected $table = 'lokasi_parkirs';
    protected $primaryKey = 'parkir_id';
    protected $fillable = ['tempat', 'lantai'];
    use HasFactory;
}

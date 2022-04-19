<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class location extends Model
{
    use HasFactory;
    protected $table = 'locations';
    protected $guarded = ['id'];

    public function Parkir()
    {
        return $this->hasMany(Parkir::class);
    }
}

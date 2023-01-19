<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mahasiswa extends Model
{
    protected $table = "mahasiswas";
    protected $primaryKey = "id";
    protected $fillable = ["nama", "nrp", "status"];
}

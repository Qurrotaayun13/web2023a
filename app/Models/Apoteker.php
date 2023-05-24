<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Apoteker extends Model
{
    use HasFactory;
    protected $table = 'apoteker';
    //protected $fillable = ['nama','jenis_kelamin','alamat'];
    protected $guarded = [];
}

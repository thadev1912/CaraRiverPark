<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tintucthitruong extends Model
{
    use HasFactory;
    protected $table='Tintucthitruong';
    protected $filltable= [
              'title',
               'noidung',
               'hinhanh',      
       
    ];
}

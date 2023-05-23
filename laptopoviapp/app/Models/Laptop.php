<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Laptop extends Model
{
    use HasFactory;
    protected $fillable = [
        'naziv',
        'ekran',
        'baterija',
        'operativni sistem',
        'boja',
        'cena'
    ];
}

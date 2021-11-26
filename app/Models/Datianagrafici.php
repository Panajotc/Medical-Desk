<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Datianagrafici extends Model
{
    use HasFactory;
    public $timestamps=false;

    protected $fillable=[
     'name',
     'cogname',
     'email',
     'cellulare',
     'nazionalita',
     'code_di_fiscale',
     'date',
     'male',
     'female',
     'Comune_residenca',
     'Cap',
     'Indirizzo'
    ];
}

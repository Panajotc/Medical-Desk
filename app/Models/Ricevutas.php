<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ricevutas extends Model
{
    use HasFactory;
    public $timestamps=false;

    protected $fillable=[
        
        'firstname',
        'lastname',
        'tax_code',
        'gmail',
        'street_address',
        'city',
        'postal_code',
        'province',
        'country'
       ];
   
   
}

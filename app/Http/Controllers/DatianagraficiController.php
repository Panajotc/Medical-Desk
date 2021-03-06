<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Datianagrafici;
use App\Models\Ricevutas;
use App\Models\Location;
use App\Models\Date;
use App\Models\Time;
use App\Models\Tampone;



class DatianagraficiController extends Controller
{
  public function index()
  { 
    
    $day = Date::all();
    $orari= Time::all();
    $place = Location::all();
    return view('home',[
      'place'=>$place,
      'day'=>$day,
      'orari'=>$orari
    ]);
    
  }
  
  
 

  public function store(Request $request)
  {
    
    $this->validate($request, [
      'quantity'=>'required',
      'name' => 'required',
      'cogname' => 'required',
      'email' => 'required',
      'cellulare' => 'required',
      'nazionalita' => 'required',
      'code_di_fiscale' => 'required',
      'date' => 'required',
      'Comune_residenca' => 'required',
      'Cap' => 'required',
      'Indirizzo' => 'required',
      'firstname' => 'required',
      'lastname' => 'required',
      'tax_code' => 'required',
      'gmail' => 'required',
      'street_address' => 'required',
      'city' => 'required',
      'postal_code' => 'required',
      'province' => 'required',
      'country' => 'required'
      
    ]);



    Datianagrafici::create([
      'name' => $request->name,
      'cogname' => $request->cogname,
      'email' => $request->email,
      'cellulare' => $request->cellulare,
      'nazionalita' => $request->nazionalita,
      'code_di_fiscale' => $request->code_di_fiscale,
      'date' => $request->date,
      'Comune_residenca' => $request->Comune_residenca,
      'Cap' => $request->Cap,
      'Indirizzo' => $request->Indirizzo
    ]);

    Ricevutas::create([

      'firstname' => $request->firstname,
      'lastname' => $request->lastname,
      'tax_code' => $request->tax_code,
      'gmail' => $request->gmail,
      'street_address' => $request->street_address,
      'city' => $request->city,
      'postal_code' => $request->postal_code,
      'province' => $request->province,
      'country' => $request->country

    ]);
      Tampone::create([
        'quantity'=>$request->quantity
      ]);

     
    return redirect()->back();
  }
}

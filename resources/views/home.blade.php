@extends('layouts.app')
@section('content')
@livewireStyles
<form method="POST">
  @csrf
  <livewire:first />
  <livewire:second />
  <div id="booking-03" class='ml-24 2xl:text-blue-900 2xl:ml-60'>

    <h4 class='text-4xl xl:text-2xl  sm:text-xl font-bold mt-16 '>03. Scegli fra le date e orari disponibili
    </h4>
    <p>Date</p>
    <div class="btn_group inline-flex flex-wrap 2xl:mr-40">
      <livewire:buttons btn="id1" value="btn1" />
      <livewire:buttons btn="id2" value="btn2" />
      <livewire:buttons btn="id3" value="btn3" />
      <livewire:buttons btn="id4" value="btn4" />
      <livewire:buttons btn="id5" value="btn5" />
      <livewire:buttons btn="id6" value="btn6" />
      <livewire:buttons btn="id7" value="btn7" />
      <livewire:buttons btn="id8" value="btn8" />
      <livewire:buttons btn="id9" value="btn9" />
      <livewire:buttons btn="id10" value="btn10" />
    </div>

    <p>Orari</p>
    <div class="btn_group inline-flex flex-wrap 2xl:mr-40">
      <livewire:buttonora bt="id11" val="btn11" />
      <livewire:buttonora bt="id12" val="btn12" />
      <livewire:buttonora bt="id13" val="btn13" />
      <livewire:buttonora bt="id14" val="btn14" />
      <livewire:buttonora bt="id15" val="btn15" />
      <livewire:buttonora bt="id16" val="btn16" />
      <livewire:buttonora bt="id17" val="btn17" />
      <livewire:buttonora bt="id18" val="btn18" />
      <livewire:buttonora bt="id19" val="btn19" />
      <livewire:buttonora bt="id20" val="btn10" />
      <livewire:buttonora bt="id21" val="btn21" />
      <livewire:buttonora bt="id22" val="btn22" />
    </div>

  </div>





  <div id="booking-04" class="ml-24 2xl:ml-60">
    <h4 class='text-4xl xl:text-2xl  sm:text-xl font-bold mt-16'>04. Dati anagrafici </h4>
    <div id="personal_info" class="grid grid-cols-2">

      <div>
        <label for="name">Name</label>
        <livewire:input text="text" name="name" />
      </div>

      <div>
        <label for="name">Cogname</label>
        <livewire:input text="text" name="cogname" />

      </div>

      <div>
        <label for="name">Email</label>
        <livewire:input text="email" name="email" />
        <p class="text-sm leading-5 my-4 text-black-900">La conferma verrà invita a questa mail.
          Si richiede di utilizzare la mail propria personale non mail aziendali</p>
      </div>

      <div>
        <label for="name">Cellulare</label>
        <livewire:input text="tel" name="cellulare" />
      </div>

      <div>
        <label for="name">Nazionalita</label>
        <livewire:input text="text" name="nazionalita" />
      </div>

      <div>
        <label for="name">Code di fiscale</label>
        <livewire:input text="number" name="code_di_fiscale" />
      </div>

      <div>
        <label for="name">Data di nascita</label>
        <livewire:input text="date" name="date" />
      </div>

      <div>
        <label for="name">Sesso</label>
        <div>
          <livewire:gender name="male" />
          <livewire:genderf name="female" />
        </div>
      </div>

      <div>
        <label for="name">Comune residenca</label>
        <livewire:input text="number" name="Comune_residenca" />
      </div>

      <div>
        <label for="name">Cap</label>
        <livewire:input text="number" name="Cap" />
      </div>

      <div>
        <label for="name">Indirizzo</label>
        <livewire:input text="text" name="Indirizzo" />
      </div>

    </div>


    <div class="checkbox inline-flex">
      <livewire:checkbox />
      <p class='mx-4'>Ho preso visione dell’informativa sul trattamento dei miei dati personali e i Termini e Condizioni *(leggi) </p>
    </div>

    <div class="checkbox-1 mb-16 inline-flex">
      <livewire:checkbox />
      <p class='mx-4'>Ho preso visione dell’informativa sul trattamento dei miei dati personali e do il consenso al loro trattamento da parte di Medispa S.r.l. quale unico Responsabile Esterno del trattamento dei dati sanitari. * (leggi)</p>
    </div>

    <div>
      <livewire:submit text="AVANTI" />
    </div>

  </div>



  <div id="booking-05" class='ml-24 2xl:ml-60'>
    <h4 class='text-4xl xl:text-2xl  sm:text-xl font-bold mt-20'>05. Tipo di ricevuta </h4>
    <p class='mt-16'>A chi dovrà essere intestata la fattura?</p>

    <div class="select-option inline-flex">
      <livewire:btn-group />
      <livewire:btn-person />
    </div>

    <div id="personal_info" class='mb-20 grid grid-cols-2 gap-4'>

      <div>
        <label for="name">Name</label>
        <livewire:input text="text" name="firstname" />
      </div>

      <div>
        <label for="name">Cogname</label>
        <livewire:input text="text" name="lastname" />
      </div>

      <div>
        <label for="name">Codice Fiscale</label>
        <livewire:input text="text" name="tax_code" />
      </div>

      <div>
        <label for="name">Email invio fattura</label>
        <livewire:input text="text" name="gmail" />
      </div>

      <div>
        <label for="name">Indirizzo</label>
        <livewire:input text="text" name="street_address" />
      </div>

      <div>
        <label for="name">Citta</label>
        <livewire:input text="text" name="city" />
      </div>

      <div>
        <label for="name">Cap</label>
        <livewire:input text="text" name="postal_code" />
      </div>

      <div>
        <label for="name">Provinzia</label>
        <livewire:input text="text" name="province" />
      </div>

      <div>
        <label for="name">Nazione</label>
        <livewire:input text="text" name="country" />
      </div>

    </div>

    <div>
      <livewire:submit text="VERIFICA" />
    </div>

  </div>
</form>

<div id="booking-06" class='ml-24 2xl:ml-60'>
  <h4 class='text-4xl xl:text-2xl sm:text-xl font-bold mt-20 mb-20'>06. Metodo di pagamento</h4>

  <div class="pay-way inline-flex">
    <livewire:pay-way text="Carta di credito" /> <i class="fab fa-cc-mastercard pl-8"></i><i class="fab fa-cc-visa pl-8"></i><i class="fab fa-cc-amex pl-8"></i>
  </div>

  <div id="card-info" class='mb-16'>

    <div class="first-input-card">
      <label for="name">Provinzia</label>
      <livewire:big-input text="text" />
    </div>

    <div class="input-dtl grid grid-cols-2 gap-x-16 my-10">

      <div>
        <label for="name">Data di scandeza</label>
        <livewire:card-input text="date" />
      </div>

      <div class="CVC">
        <label for="name">CVC/CVV</label>
        <livewire:card-input text="number" />
      </div>

    </div>

    <div>
      <label for="name">Nome sualla carta</label>
      <livewire:big-input text="text" />
    </div>

  </div>

  <div class="pay-way2 inline-flex">
    <livewire:pay-way text="PayPal" /> <i class="fab fa-paypal px-10"></i>
    <p>Che cos’e PayPal?</p>
  </div>

  <div class='mt-14'>
    <livewire:pay-way text="GooglePay" />
  </div>

  <div id="checkbox" class="max-w-screen-lg">

    <div class="checkbox inline-flex mb-7 mt-12">
      <livewire:checkbox />
      <p class='mx-4'>Ho preso visione dell’informativa sul trattamento dei miei dati personali e i Termini e Condizioni *(leggi) </p>
    </div>

    <div class="checkbox inline-flex mb-2.5">
      <livewire:checkbox />
      <p class='mx-4'>Ho preso visione dell’informativa sul trattamento dei miei dati personali e do il consenso al loro trattamento da parte di Medispa S.r.l. quale unico Responsabile Esterno del trattamento dei dati sanitari. * (leggi)</p>
    </div>

    <div class="checkbox inline-flex">
      <livewire:checkbox />
      <p class='mx-4'>Ho preso visione dell’informativa sul trattamento dei miei dati personali e do il consenso al loro trattamento da parte di Medispa S.r.l. quale unico Responsabile Esterno del trattamento dei dati sanitari. * (leggi)</p>
    </div>

  </div>

  <livewire:submit2 text="CONFERMA E PAGA" />

</div>

@livewireScripts
@endsection
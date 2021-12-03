@extends('layouts.app')
@section('content')
@livewireStyles
<form method="POST">
  @csrf


  <div id="booking01" class='text-blue-900  '>
    <div id="back-btn" class='ml-20 xl:ml-0 sm:ml-0'>
      <svg id="go-back" class='mx-16 m-10' width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M24.0016 48C37.235 48 48.0011 37.2335 48.0011 23.9999C48.0011 10.7665 37.235 0 24.0016 0C10.7682 0 0.00195312 10.7665 0.00195312 23.9999C0.00195312 37.2335 10.7682 48 24.0016 48ZM24.0016 3.28541C35.4234 3.28541 44.7157 12.5778 44.7159 23.9999C44.7159 35.4219 35.4237 44.7144 24.0016 44.7146C12.5798 44.7144 3.28758 35.4219 3.28758 23.9997C3.28758 12.5781 12.5798 3.28541 24.0016 3.28541Z" fill="#09425A" />
        <path d="M20.7776 34.2794C21.4191 34.9207 22.4593 34.9204 23.1006 34.2794C23.7423 33.6376 23.7423 32.5977 23.1004 31.9559L16.788 25.6438L35.0673 25.642C35.9745 25.6418 36.7098 24.9065 36.7098 23.9989C36.7096 23.0917 35.9743 22.3566 35.0671 22.3566L16.7871 22.3584L23.101 16.0449C23.7425 15.4034 23.7425 14.363 23.101 13.7217C22.7801 13.401 22.3598 13.2405 21.9393 13.2405C21.519 13.2405 21.0987 13.401 20.7778 13.7215L11.6599 22.8391C11.3517 23.1471 11.1787 23.5648 11.1787 24.0006C11.1789 24.4365 11.352 24.854 11.6601 25.1626L20.7776 34.2794Z" fill="#09425A" />
      </svg>
    </div>
    <div id="service" class='w-1/3 leading-tight ml-24 2xl:ml-60 '>

      <h2 class='text-4xl  font-bold xl:text-2xl  sm:text-xl'>
        PRENOTA SERVIZIOIN STORE
      </h2>

      <p class='my-6 text-xs 2xl:w-8/12'>
        All’interno delle strutture e dei mezzi ParkinGO è necessario indossare la mascherina e rispettare la distanza di sicurezza interpersonale.
      </p>

    </div>
    <div id="booking-01" class='ml-24 2xl:ml-60'>
      <h1 class=' text-4xl font-bold mr-24 xl:text-2xl  sm:text-xl'>01. Prenota ora i tamponi in Drive-in</h1>

      <div class="reserve flex justify-items-center justify-between">
        <h4><i class="fas fa-map-marker-alt fa-2x"></i>ParkingGO Malpensa</h4>
        <p class="hidd"><i class="fas fa-clock fa-2x"></i>Mar 23 Feb 2021</p>
        <div class="items-center float-right pt-3 pr-24 text-lg underline">
          <select class="loc w-40 underline">
            @foreach ($place as $location)
            <option>{{$location->locationname}}</option>
            @endforeach
          </select>
        </div>
      </div>
    </div>



  </div>



  <div id="booking-02" class='ml-24 2xl:ml-60 text-blue-900'>


    <h4 class='text-4xl font-bold mt-20 xl:text-2xl  sm:text-xl'>02. Prenota ora i tamponi in Drive-in</h4>
    <div class="test flex ml-2.5">

      <div class="type-01">
        <h7>Tampone Rapido Antigenico <i class="fas fa-info-circle fa-1x"></i> </h7>

        <div class="col-12">

          <div id="dropd" class='flex justify-between'>

            <p class="flex">90$</p>

            <div>
              <label>Qta</label>
              <select class="form-select-1 text-blue-900 " id="inlineFormSelectPref">
                <option selected>0</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
              </select>
            </div>
          </div>
        </div>
      </div>

      <div class="type-02 mx-7">
        <h7>Tampone Molecolare PCR <i class="fas fa-info-circle fa-1x"></i></h7>

        <div class="col-12">

          <div id="dropd" class='flex justify-between '>
            <p class="flex">50$</p>
            <div>
              <label>Qta</label>
              <select class="form-select-1 text-blue-900 " id="inlineFormSelectPref">
                <option selected>0</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
              </select>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>



  <div id="booking-03" class='ml-24 2xl:text-blue-900 text-blue-900 2xl:ml-60'>
    <h4 class='text-4xl xl:text-2xl  sm:text-xl font-bold mt-16 '>03. Scegli fra le date e orari disponibili
    </h4>
    <p>Date</p>
    <div class="date mr-20">
      <div class="grid grid-cols-2 gap-4  btn_group inline-flex flex-wrap 2xl:mr-40 lg:grid-cols-6">
        @foreach($day as $dates)
        <livewire:buttons btn="{{$dates->id}}" value="btn1" date="{{$dates->date}}" />
        @endforeach

      </div>
    </div>

    <p>Orari</p>
    <div class="ora">
      <div class="grid grid-cols-2 gap-4 btn_group text-blue-900 inline-flex flex-wrap 2xl:mr-40 lg:grid-cols-6 ">
        @foreach($orari as $times)
        <livewire:buttonora bt="{{$times->orari}}" val="btn2" ora="{{$times->orari}}" />
        @endforeach
      </div>
    </div>

  </div>



  <div id="booking-04" class="text-blue-900 ml-24 2xl:ml-60">
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



  <div id="booking-05" class='text-blue-900 ml-24 2xl:ml-60'>
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

<div id="booking-06" class='text-blue-900 ml-24 2xl:ml-60'>
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
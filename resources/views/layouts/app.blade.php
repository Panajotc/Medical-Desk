<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Medical</title>
  <script src="https://kit.fontawesome.com/0a55ccbade.js" crossorigin="anonymous"></script>
  <link href="{{asset('css/app.css')}}" rel="stylesheet" type="text/css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/css/select2.css" />
</head>

<body>
  <div>
  <livewire:navbar />
  @yield('content')
  <livewire:footer />
</div>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/js/select2.js"></script>
  <script type="text/javascript" src="{{ asset('js/index.js') }}"></script>

</body>

</html>
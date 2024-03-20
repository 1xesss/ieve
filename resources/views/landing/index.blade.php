<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body>

<header class="w-full bg-black flex flex-col gap-4 ">

<div class="w-full bg-black text-white text-xl flex items-center justify-center gap-4">
    <i class="bi bi-facebook"></i>
    <i class="bi bi-linkedin"></i>
    <i class="bi bi-whatsapp"></i>
    <i class="bi bi-twitter-x"></i>
</div>

<nav class="bg-black w-full flex items-center justify-center">
  <img src="{{ asset('assets/img/escudoieve.png')}}" alt="">
    <h1></h1>
</nav>


</header>

 <div class="cards">
    <div class="card1 justify-center" >
        <img src="{{asset('assets/img/prueba.jpg')}}" alt="">
        <p></p>
    </div>
    <div class="card2">
        <img src="" alt="">
        <p></p>
    </div>
    <div class="card3">
        <img src="" alt="">
        <p></p>
    </div>
 </div>

</body>
</html>

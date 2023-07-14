<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;300;400;600&display=swap" rel="stylesheet">
    <link href="{{ asset('css-bae/main.css') }}" rel="stylesheet">
  </head>

  <body>
    <!-- <audio autoplay="autopaly">
      <source src="renxi.mp3" type="audio/mp3" />
    </audio> -->
    <!-- 星空html -->
    <!-- <div> -->
    <div class="container2">
      <div class="content">
        <canvas id="universe"></canvas>
      </div>
    </div>
    <!-- </div> -->
    <div class="title">
      <!-- EDIT HERE -->
      <h3 class="STARDUST1">FOREVER</h3>
      <h1 class="STARDUST2">Đinh Cường &amp; Phương Huyền</h1>
      <h3 class="STARDUST3">L O V E <strong>❤</strong> Y O U</h3>
      <img class="img" src="{{ asset('images-UI/bae.jpg') }}" alt="MY LOVE" />
      <canvas id="pinkboard"></canvas>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="{{ asset('js-bae/main.js') }}"></script>
    <script src="{{ asset('js-bae/particle.js') }}"></script>
    <script src="{{ asset('js-bae/universe.js') }}"></script>
  </body>
</html>
<!DOCTYPE html>
<html lang="pt_BR">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../../css/main/index.css">
    <link rel="stylesheet" href="../../css/products/index.css">
    <title>Controle Almoxafarifado</title>
  </head>
  <body>
    <div class="logo">
      <img src="../../imgs/logo.jpg" alt="">
      <h1>TECIDOS DIVERSOS LTDA</h1>
    </div>
    <div class="menu" id="menu">
      <ion-icon name="reorder-four" id="menuClose"></ion-icon>
      <ion-icon name="reorder-two" id="menuOpen"></ion-icon>
      <div id="modalOpen">
        <a href="/products">
          <p>Produto</p>
        </a>
      </div>
    </div>
    <div class="content">
      @yield('content')
    </div>
    <div class="footer">
      <p>Copyright ©
        @php
          echo date("Y");
        @endphp
      </p>
    </div>
  </body>
  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Acme&family=Heebo:wght@300&family=Ubuntu+Mono&display=swap" rel="stylesheet">
  <script src="../../scripts/index.js"></script>
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js" type="text/javascript"></script>
</html>

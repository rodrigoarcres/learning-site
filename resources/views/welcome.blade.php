@extends('layouts.main')

@section('title', 'Criar envento')

@section('content')
<header>
<nav class="navbar navbar-expand-lg navbar-light bg-ligh">
<div class="container-fluid">
    <a class="navbar-brand" href="#"><img src="/img/logo.png"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link active" href="#">INICIO</a>
        <a class="nav-link" href="#">CURSOS</a>
        <a class="nav-link" href="#">CONTATO</a>
        <a class="nav-link" href="#">AULAS</a>
      </div>
    </div>
  </div>
</nav>
<div class="container">
  <div class="row">
    <div class="col">
    CURSO ONLINE
100% VOLTADO PARA
O ENSINO INFANTIL
    </div>
    <div class="col-md-auto">
      <img src="/img/image-header.png" class="img-fluid">
    </div>
  </div>
</div>
</header>
<div class="container" id="main">
    <div class="row">
        <div class="col-md-auto">
            <img src="/img/img-main.png" alt="">
        </div>
        <div class="col-6">
        <span style="font-family: 'Open Sans';font-weight: 800;font-size:64px;color:#4C1E53;">EXPLORE O MUNDO</span>
        <span style="font-family: 'Open Sans';font-weight: 800;font-size:64px;color:#4C1E53;">DOS JOGOS</span>
        <ul class="list-group list-group-flush">
        <li class="list-group-item">Cras justo odio</li>
        <li class="list-group-item">Dapibus ac facilisis in</li>
        <li class="list-group-item">Morbi leo risus</li>
        <li class="list-group-item">Porta ac consectetur ac</li>
        <li class="list-group-item">Vestibulum at eros</li>
        </ul>
        <img src="/img/bottom.png" class="img-fluid">
        </div>
    </div>
</div>
@endsection
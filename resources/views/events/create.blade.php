@extends('layouts.main')

@section('title', 'Criar envento')

@section('content')

<h1>Crie um evento</h1>
<div id="event-create-container" class="col-md-6 offset-md-3">
    <h1>Crie seu evento</h1>
    <form action="/events" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="image">Imagem do evento:</label>
            <input type="file" id="image" name="image" class="form-control-file">
        </div>
        <div class="form-group">
            <label for="title">Evento:</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Nome do evento"></input>
        </div>

        <div class="form-group">
            <label for="title">Cidade:</label>
            <input type="text" class="form-control" id="city" name="city" placeholder="Cidade"></input>
        </div>
        <div class="form-group">
            <label for="title">Privado?</label>
            <select name="private" id="private" class="form-control">
                <option value="0">Nao</option>
                <option value="1">Sim</option>
            </select>
        </div>
        <div class="form-group">
            <label for="title">Descricao:</label>
            <textarea name="description" id="description" placeholder="Descricao do evento"></textarea>
        </div>
        <input type="submit" class="btn btn-primary" value="Criar evento">
    </form>
</div>


@endsection
@extends('layouts.main')
@section('title', 'HDC Events')

@section('content')

<div id="event-create-container" class="col-md-6 offset-md-3">
    <h1>Crie o seu Evento</h1>
    <form action="/events" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="image">Imagem do Evento:</label>
            <input type="file" class="form-control-file" id="image" name="image">
        </div>
        <div class="form-group">
            <label for="title">Evento:</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="nome do evento">
        </div>
        <div class="form-group">
            <label for="date">Data do evento:</label>
            <input type="date" class="form-control" id="date" name="date">
        </div>
        <div class="form-group">
            <label for="title">Cidade:</label>
            <input type="text" class="form-control" id="city" name="city" placeholder="local do evento">
        </div>
        <div class="form-group">
            <label for="title">O evento eh privado?</label>
            <select name="private" id="private" class="form-control">
                <option value="1">Sim</option>
                <option value="0">Nao</option>
            </select>
        </div>
        <div class="form-group">
            <label for="title">Description:</label>
            <textarea class="form-control" id="description" name="description" placeholder="O que vai acontecer no evento?"></textarea>
        </div>
        <div class="form-group">
            <label for="title">Adicione itens de infraestrutura:</label>
            <div class="form-group">
                <input type="checkbox" value="Cadeiras" name="items[]" id=""/> Cadeiras
            </div>
            <div class="form-group">
                <input type="checkbox" value="Palco" name="items[]" id=""/> Palco
            </div>
            <div class="form-group">
                <input type="checkbox" value="Cerveja Gratis" name="items[]" id=""/> Cerveja Gratis
            </div>
            <div class="form-group">
                <input type="checkbox" value="Open Food" name="items[]" id=""/> Open Food
            </div>
            <div class="form-group">
                <input type="checkbox" value="Brindes" name="items[]" id=""/> Brindes
            </div>
        </div>
        <input type="submit" class="btn btn-primary" value="Criar Evento">
    </form>
</div>

@endsection

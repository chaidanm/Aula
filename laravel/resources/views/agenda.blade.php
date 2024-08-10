@extends('layout')
@section('Conteudo')

<h1>Agenda</h1>

<p> Informe seus dados </p>

<form action="" method="post" class="offset-md-3 col-md-4">
    <div class="mb-2 mx-3"> 
        <label class="form-label ">Nome</label>
        <input  class="form-control" type="text" name="nome">
    </div>

    <div class="mb-2 mx-3">
        <label class="form-label">Telefone</label>
        <input class="form-control" type="text" name="fone">
    </div>  

    <div>
        <button type="submit" class="btn btn-success mt-3 mx-3"> Agendar </button>
    </div>

    @endsection





</form>
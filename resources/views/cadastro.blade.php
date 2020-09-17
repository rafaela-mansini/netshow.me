@extends('template')

@section('conteudo')

<div class="container">
    <form method="POST" action="{{ route('cadastro') }}" enctype="multipart-form-data">
        <div class="row">
            <div class="form-group col-12 col-md-8">
                <label for="nome">Digite seu nome</label>
                <input type="text" name="nome" id="nome" class="form-control" />
            </div>
            <div class="form-group col-12 col-md-4">
                <label for="telefone">Digite seu telefone</label>
                <input type="tel" name="telefone" id="telefone" class="form-control" />
            </div>
            <div class="form-group col-12">
                <label for="email">Digite seu e-mail</label>
                <input type="email" name="email" id="email" class="form-control" />
            </div>
            <div class="form-group col-12">
                <label for="nome">Insira seu anexo <small>(podem ser pdf, doc, docx, odt ou txt com no máximo 500kb)</small></label>
                <input type="file" name="nome" id="nome" class="form-control" />
            </div>
            <div class="form-group col-12">
                <label for="mensagem">Escreva sua mensagem abaixo</label>
                <textarea name="mensagem" id="mensagem" class="form-control" rows="5"></textarea>
            </div>
            <div class="form-group col-12 col-md-4 offset-md-4">
                <button class="btn btn-primary btn-block">Salvar informações</button>
            </div>
        </div>
    </form>
</div>

@stop
@extends('template')

@section('conteudo')

<div class="container">
    <form method="POST" action="{{ route('cadastro') }}" enctype="multipart/form-data">
    @csrf
        <div class="row">
            <div class="form-group col-12 col-md-8">
                <label for="nome">Digite seu nome</label>
                <input type="text" name="nome" id="nome" class="form-control" value="{{ old('nome') }}" />
                @error('nome')
                    <span class="text-danger"><i>{{ $message }}</i></span>
                @enderror
            </div>
            <div class="form-group col-12 col-md-4">
                <label for="telefone">Digite seu telefone</label>
                <input type="tel" name="telefone" id="telefone" class="form-control telefone" value="{{ old('telefone') }}" />
                @error('telefone')
                    <span class="text-danger"><i>{{ $message }}</i></span>
                @enderror
            </div>
            <div class="form-group col-12">
                <label for="email">Digite seu e-mail</label>
                <input type="text" name="email" id="email" class="form-control" value="{{ old('email') }}" />
                @error('email')
                    <span class="text-danger"><i>{{ $message }}</i></span>
                @enderror
            </div>
            <div class="form-group col-12">
                <label for="arquivo">Insira seu anexo <small>(podem ser pdf, doc, docx, odt ou txt com no máximo 500kb)</small></label>
                <input type="file" name="arquivo" id="arquivo" class="form-control" value="{{ old('arquivo') }}" />
                @error('arquivo')
                    <span class="text-danger"><i>{{ $message }}</i></span>
                @enderror
            </div>
            <div class="form-group col-12">
                <label for="mensagem">Escreva sua mensagem abaixo</label>
                <textarea name="mensagem" id="mensagem" class="form-control" rows="5">{{ old('mensagem') }}</textarea>
                @error('mensagem')
                    <span class="text-danger"><i>{{ $message }}</i></span>
                @enderror
            </div>
            <div class="form-group col-12">
                @include('mensagem-erro')
            </div>


            <div class="form-group col-12 col-md-4 offset-md-4">
                <button class="btn btn-primary btn-block">Salvar informações</button>
            </div>
        </div>
    </form>
</div>

@stop
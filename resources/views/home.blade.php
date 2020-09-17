@extends('template')

@section('conteudo')

<div class="container">
    <div class="row">
        <div class="col-6 offset-3 col-md-6 offset-md-6">
            <a href="/cadastrar" class="btn btn-block btn-primary">CADASTRAR NOVO</a>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <p class="text-center">Confirma abaixo os cadastros já realizados em nossos sistema. Para realizar um novo cadastro basta clicar no botão acima</p>
            <div class="table-responsive">
                <table class="table table-bordered table-sm">
                    <thead>
                        <tr class="table-secondary">
                        <th scope="col">Nome</th>
                        <th scope="col">E-mail</th>
                        <th scope="col">Telefone</th>
                        <th scope="col">Mensagem</th>
                        <th scope="col" style="text-align:center;width:65px;">Anexo</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">Rafaela Mansini</th>
                            <td>rafaela@gmail.com</td>
                            <td>(11) 99999-9999</td>
                            <td>Teste oi</td>
                            <td style="text-align:center"><a href="#.">Abrir</a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@stop
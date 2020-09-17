<!DOCTYPE html>
<html>

<head>
	<title><?= SITE_NAME ?></title>
	<meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	<link rel="stylesheet" id="main-style" type="text/css" href="<?= CSS ?>bootstrap.min.css">
	<link rel="stylesheet" id="main-style" type="text/css" href="<?= CSS ?>main.css">
	<script type="text/javascript" src="<?= JS ?>jquery-3.5.1.min.js"></script>
	<script type="text/javascript" src="<?= JS ?>bootstrap.min.js"></script>
    <link rel="shortcut icon" href="<?= IMAGES ?>favicon.svg" />
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-10 col-md-6 offset-md-3">
                <a href="/">
                    <img src="<?= IMAGES ?>logo.svg" class="img-fluid logo" alt="Netshow.me logotipo" title="Netshow.me" />
                </a>
            </div>
        </div>

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

<body>

</html>
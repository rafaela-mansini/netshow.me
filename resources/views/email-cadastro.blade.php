<!doctype html>
<html>

<head>
    <meta name="viewport" content="width=device-width" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Novo cadastro efetuado</title>
</head>

<body style="background-color:#FFF;">
    <table cellpadding="0" cellspacing="0" class="body" style="max-width:600px; width:100%; padding:20px; margin:auto; border:none;">
        <tr>
            <td class="container" style="font-family:sans-serif; font-size:13px; font-weight:normal; margin:0; background-color:rgb(243 243 243); padding:10px;">
                <h1 class="preheader" style="padding:10px;text-align:center;background:rgb(238 57 101);">Novo cadastro efetuado</h1>
                
                <p style="margin-bottom:30px; text-align:justify;line-height: 25px;">
                    <b>Nome:</b> {{ $informacoes['nome'] }}<br/>
                    <b>E-mail:</b> {{ $informacoes['email'] }}<br/>
                    <b>Telefone:</b> {{ $informacoes['telefone'] }}<br/>
                    <b>Mensagem:</b> {{ $informacoes['mensagem'] }}<br/>
                    <i>Verifique o arquivo em anexo</i>
                </p>

                <p>Obrigado por se cadastrar!</p>
            </td>
        </tr>
    </table>
    <div style="clear:both; text-align:center; width:100%; color:#999999; font-size:12px;font-family:'Sans-serif'">
        {{ env('APP_NAME') }}<br>
        {{ date('d/m/Y H:i:s') }}
    </div>
</body>

</html>
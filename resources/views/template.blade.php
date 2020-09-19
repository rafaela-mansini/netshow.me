<!DOCTYPE html>
<html>

<head>
	<title>Netshow.me</title>
	<meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	<link rel="stylesheet" id="main-style" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">
	<link rel="stylesheet" id="main-style" type="text/css" href="{{ asset('css/main.css') }}">
	<script type="text/javascript" src="{{ asset('js/jquery-3.5.1.min.js') }}"></script>
    <link rel="shortcut icon" href="{{ asset('images/favicon.svg') }}" />
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-10 col-md-6 offset-md-3">
                <a href="/">
                    <img src="{{ asset('images/logo.svg') }}" class="img-fluid logo" alt="Netshow.me logotipo" title="Netshow.me" />
                </a>
            </div>
        </div>
    </div>

        @yield('conteudo')

	<script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/jquery.mask.min.js') }}"></script>
    <script>
    $(document).ready(function(){
        var behavior = function (val) {
            return val.replace(/\D/g, '').length === 11 ? '(00) 00000-0000' : '(00) 0000-00009';
        },
        options = {
            onKeyPress: function (val, e, field, options) {
                field.mask(behavior.apply({}, arguments), options);
            }
        };

        $('.telefone').mask(behavior, options);
    });
    </script>
<body>

</html>
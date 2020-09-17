<?php
setlocale(LC_ALL, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
date_default_timezone_set('America/Sao_Paulo');
error_reporting(E_ALL ^ E_WARNING);
function dd($termo, $array = false) {
    if ($array) {
        foreach ($termo as $key => $value) {
            echo '<pre style="background: #000; color: tomato; padding: 10px;">';
            print_r($key . ' => ' . $value);
            echo '</pre>';
        }
        exit(0);
    } else {
        echo '<pre style="background: #000; color: tomato; padding: 10px;">';
        print_r($termo);
        exit(0);
    }
}
$anoAtual = (date('Y') > 2020) ? ' - '.date('Y') : '';

// DEFINICOES DO SISTEMA
define ('SITE_NAME', 'Netshow.me');
define ('DDD', '11');
define ('TELEFONE_PRINCIPAL', '');
define ('TELEFONE_SECUNDARIO', '');
define ('LINK_TELEFONE_PRINCIPAL', DDD.str_replace('-','',TELEFONE_PRINCIPAL));
define ('LINK_TELEFONE_SECUNDARIO', DDD.str_replace('-','',TELEFONE_SECUNDARIO));
define ('ENDERECO', '');

define ('EMAIL_PRINCIPAL', 'falecom@mdexpress.com.br ');
define ('HOST_EMAIL', ' smtp.umbler.com');
define ('USERNAME_EMAIL', 'falecom@mdexpress.com.br ');
define ('PASSWORD_EMAIL', '');

define ('META_TITLE', 'Impressão de livros e apostilas | DUCONN Comunicação');
define ('META_KEYWORDS', '');
define ('META_DESCRIPTION', 'A DUCONN tem como principal objetivo facilitar o processo de impressão de livros e apostilas através de um sistema simples e intuitivo.');

define('COPYRIGHT', 'Copyright &copy 2019' . $anoAtual . ' ' . SITE_NAME . '. Todos os direitos reservados.');

// DEFINE AS CONSTANTES DE CAMINHO E SUAS PASTAS --> PADRAO MVC
define ('VIEW', $_SERVER['DOCUMENT_ROOT'].'views/');
define ('CONTROLLER', $_SERVER['DOCUMENT_ROOT'].'controller/');
define ('CSS', '/assets/css/');
define ('JS', '/assets/js/');
define ('IMAGES', '/images/');
//require_once MODEL.'funcoes.php';

// DEFINE AS CONTANTES DO BANCO E CRIA A CONEXAO
// define("HOST", "mysql995.umbler.com");
// define("USER", "duconn");
// define("PASSWORD", "J2B45cmA75-y");
// define("DATABASE", "site_duconn");

// require_once MODEL.'conexao.php';
// $con = Conexao::getInstance();
?>

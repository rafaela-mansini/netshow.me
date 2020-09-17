<?php
/**
* @category Arquivo de index, responsável por verificar qual o método está sendo chamado e encaminhar para a controller correta a partir da URL
* @since 16/09/2020
* @author Rafaela Mansini
*/

require_once 'config.php';

// Abrir Home
if (!isset($_GET['page'])) {
	include CONTROLLER . 'home.php';
} else { // Abre outras paginas
	if (file_exists(CONTROLLER . $_GET['page'] . '.php')) {
		include CONTROLLER . $_GET['page'] . '.php';
	} else {
		include CONTROLLER . 'erro.php';
	}
}
?>

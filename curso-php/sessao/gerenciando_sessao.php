<div class="titulo">Gerenciado Sessão</div>

<?php
	// define a sessão
	// session_id('a6f016330fb0e192fd9f4932ab8b21bf');
	session_start();
	echo session_id();

	// referência de memória
	$contador = &$_SESSION['contador'];
	$contador = $contador ? $contador + 1 : 1;
	echo '<br>' . $_SESSION['contador'];

	// de cinco em cinco muda a sessão
	if($_SESSION['contador'] % 5 === 0){
		session_regenerate_id();
	}

	if($_SESSION['contador'] >= 15){
		session_destroy();
	}
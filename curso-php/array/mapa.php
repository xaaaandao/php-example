<div clas="titulo">
	Mapa
</div>

<?php
	$dados = array (
		"idade" => 25,
		"cor" => "verde",
		"peso" => 49.8
	);
	print_r($dados);

	var_dump($dados[0]);
	echo '<br>';
	echo $dados["idade"];
	echo '<br>';
	echo $dados["cor"];
	echo '<br>';
	echo $dados["peso"];
	echo '<br>';
	// echo $dados["outra_informacao"];
	// echo '<br>';
	var_dump($dados["outra_informacao"]);

	$lista = array(
		"a",
		"cinco" => "b",
		"c",
		8 => "d",
		"e",
		6 => "f",
		"g",
		8 => "h"
	);

	echo '<br>';
	print_r($lista);

	$lista[] = 'i';
	echo '<br>';
	print_r($lista);

	$lista['vinte'] = 'j';
	echo '<br>';
	print_r($lista);	

	// O false vira zero
	$lista[false] = 'tentei indexar com false!';
	echo '<br>';
	print_r($lista);

	// O true vira um
	$lista[true] = 'tentei indexar com true!';
	echo '<br>';
	print_r($lista);
<div class="titulo">
	Download
</div>

<?php
	session_start();

	$arquivos = $_SESSION['arquivos'] ?? [];

	$pastaUpload = __DIR__ . './';
	$nomeArquivo = $_FILES['arquivo']['name'];
	$arquivo = $pastaUpload . $nomeArquivo;

	$tmp = $_FILES['arquivo']['tmp_name'];
	if(move_uploaded_file($tmp, $arquivo)){
		echo "<br>Arquivo válido e enviado com sucesso.";
		// Para add no array
		$arquivos[] = $nomeArquivo;
		$_SESSION['arquivos'] = $arquivos;
	} else {
		echo "<br>Erro no upload de arquivo.";
	}
?>

<form action="#" method="post" enctype="multipart/form-data">
	<input name="arquivo" type="file">
	<button>Enviar</button>
</form>

<ul>
	<?php foreach ($arquivos as $arquivo):?>
		<li>
			<a href="./<?= $arquivo ?>">
				<?= $arquivo ?>
			</a>
		</li>
	<?php endforeach ?>
</ul>

<style>
	input, button {
		font-size: 1.2 rem;
	}
</style>
<!doctype html>
<html>

<head>
	<title>betabase</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="app/css/bootstrap.min.css">
	<link rel="stylesheet" href="app/css/bootstrap-theme.min.css">
	<link rel="stylesheet" href="app/css/style.css">
	<link rel="shortcut icon" href="app/img/favicon.png" sizes="32x32" type="image/png">
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
    <div class="container">
        <!-- Necessário enctype para poder enviar (ele é uma forma de encriptação) -->
        <form name="meu_formulario" method="post" action="processa.php" enctype="multipart/form-data">
            <input type="file" name="arquivo">
            <input type="submit" name="submit" value="Enviar">
        </form>
    </div>
</body>

<footer>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="app/js/bootstrap.min.js"></script>
</footer>

</html>

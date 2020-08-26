<div class="titulo">
    $_POST
</div>

<!-- # => é âncora -->
<form action="#" method="post">
    <input type="text" name="nome">
    <input type="text" name="sobrenome">
    <select name="estado">
        <option value="AC">
            Acre
        </option>
        <option value="BA">
            Bahia
        </option>
    </select>
    <button>
        Enviar
    </button>
</form>

<!-- qualquer coisa que tive embaixo de form -->
<style>
    form > * {
        font-size: 1.8rem;
    }
</style>

<?php
    echo $_POST;
    echo '<br>';

    // Ambos são array
    print_r($_GET);
    echo '<br>';
    print_r($_POST);
    echo '<br>';

    echo count($_POST);
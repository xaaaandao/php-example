<?php

/**
 * Inclui a classe Pessoa
 * require_once inclui somente uma vez
 * @ ignore todos os warning
 */
require "Pessoa.php";
require "Programador.php";
require "Connect.php";
require "Connect2.php";

/**
 * Instância objeto e atribui um valor para o atributo
 */
$uma_pessoa = new Pessoa("Xandãozinho");
// $uma_pessoa->nome = "Xandão";
// $uma_pessoa->site = "www.xandao.com.br";

/**
 * Printa o objeto
 */
// var_dump($uma_pessoa);

/**
 * Printa os atributos
 */
// $uma_pessoa->falarNome();
// $uma_pessoa->falarSite();

/**
 * Set e get da calsse
 */
// $uma_pessoa->setNome("Xandão");
echo($uma_pessoa->getNome());

$um_programador = new Programador("Xandão", "C");
echo($um_programador->getNome());

/**
 * Acessar uma constante
 */
echo($um_programador::ESPECIE);

/**
 * namespace utilizado quando você tem nome de funções iguais em arquivo diferentes
 */
ConectarBanco\conectar();
ConectarSite\conectar();

/**
 *
 */

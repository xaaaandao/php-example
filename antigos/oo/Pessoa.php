<?php

class Pessoa {
	/**
	 * public -> você consegue alterar sem get e set
	 * private -> se você instância a classe você consegue dar get e set
	 * protected -> recomendando se você herda de outra classe e ai você consegue dar get e set + (get e set)
	 */
    protected $nome;
    // private $nome;
    public $site;
    /**
     * Para criar uma constante
     */
    const ESPECIE = "Humana";

	/**
	 * Construtor da classe
	 */
	public function __construct($nome)
	{
    	$this->nome = $nome;
	}

    public function falarNome()
    {
        echo $this->nome;
    }

    public function falarSite()
    {
        echo $this->site;
    }

    public function setNome($nome)
    {
    	$this->nome = $nome;
    }

    public function getNome()
    {
    	return $this->nome;
    }
}

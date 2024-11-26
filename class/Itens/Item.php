<?php

class Item{
    private string $nome;
    private int $tamanho;
    private string $classe;

    public function __construct(string $nome, int $tamanho, string $classe){
        $this->setNome($nome);
        $this->setTamanho($tamanho);
        $this->setClasse($classe);
    }

    public function getNome(): string{
        return $this->nome;
    }

    public function setNome($nome): void{
        if($nome != ''){
            $this->nome = $nome;
        } else {
            $this->nome = 'Sem Nome';
        }
    }

    public function getTamanho(): int{
        return $this->tamanho;
    }

    public function setTamanho($tamanho): void{
        if($tamanho >= 0){
            $this->tamanho = $tamanho;
        } else {
            $this->tamanho = 0;
        }
    }

    public function getClasse(): string{
        return $this->classe;
    }

    public function setClasse($classe): void{
        if($classe != ''){
            $this->classe = $classe;
        } else {
            $this->classe = 'Sem Classe';
        }
    }


}
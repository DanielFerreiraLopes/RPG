<?php
require_once 'Inventario.php';

class Player {
    private string $nickname;
    private int $nivel;
    public Inventario $inventario;

    public function __construct(string $nickname, int $nivel){
        $this->setNickname($nickname); 
        $this->setNivel($nivel);
        $this->inventario = new Inventario($this->calcularNivelInventario());
    }

    public function getNickname(): string{
        return $this->nickname;
    }

    public function setNickname($nickname): void{
        if($nickname != ''){
            $this->nickname = $nickname;
        } else {
            $this->nickname = 'Sem Nome';
        }
    }

    public function getNivel(): int{
        return $this->nivel;
    }

    public function setNivel($nivel): void{
        if($nivel >= 1){
            $this->nivel = $nivel;
        } else {
            $this->nivel = 1;
        }
    }

    public function coletarItem(Item $item): void{
        echo "Item coletado </br>";
        $this->inventario->adicionar($item);
    }

    public function soltarItem(int $item): void{
        $this->inventario->remover($item);
        echo "Item soltado </br>";
    }

    public function listarItens(){
        $this->inventario->listar();
    }

    public function subirNivel(): void{
        $this->nivel += 1;
        $this->inventario->setCapacidadeMaxima($this->inventario->getCapacidadeMaxima() + ($this->nivel * 3));

        echo "Parabens você subiu para o nível {$this->getNivel()} </br>";
        echo "Sua capacidade máxima agora é {$this->inventario->getCapacidadeMaxima()} </br>";
    }


    public function calcularNivelInventario(): int{
        $capacidade = 20;
        
        for ($i = 2; $i <= $this->getNivel(); $i++){
            $capacidade = $capacidade + ($i * 3);
            echo $capacidade . "</br>";
        }

        return $capacidade;
    }
    
}
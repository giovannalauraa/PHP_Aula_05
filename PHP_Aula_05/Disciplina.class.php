<?php
    class Disciplina{

        // Criando os atributos - variáveis da classe
        private $nome;
        private $cargaHoraria;
        private $ementa;

        //Criando construtores
        public function __construct($nome, $cargaHoraria, $ementa){
            $this->nome = $nome;
            $this->cargaHoraria = $cargaHoraria;
            $this->ementa = $ementa;
            echo "<br /> <i /> Classe criada";
            echo "<br>";
        }

        //Função Get para nome (obterNome)
        public function getNome(){
             return $this->nome;
        }

        //Função Set para nome (atribuirNome)
        public function setNome($nome){
            $this->nome = $nome;
        }

        public function exibirDados(){
            echo "<br>";
            echo "<br />O nome da ".__CLASS__." é ".$this->nome;
            echo "<br>";
            echo "<br />A carga horária da ".__CLASS__." é ".$this->cargaHoraria;
            echo "<br>";
            echo "<br />A ementa da ".__CLASS__." é ".$this->ementa;

        }
    }
    $logica = new Disciplina("Lógica.", 160, "Algoritmos.");
    //Chamando a função exibir dados 
    $logica->exibirDados();


    //Lição de casa: C  riar uma classe para um Aluno
    /* Classe, formulário, arquivo que recebe formulário
    */



        /*public function getcargaHoraria(){
            $this->cargaHoraria = $cargaHoraria;
        }

        public function setcargaHoraria(){
            $this->cargaHoraria = $cargaHoraria;
        }
        public function getementa(){
            $this->ementa = $ementa;
        }

        public function setementa(){
            $this->ementa = $ementa;
        }*/



    
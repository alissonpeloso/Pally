<?php
    class Sabor{
        private $codigo;
        private $nome;
        private $ingredientes;
        private $nomeImagem;

        public function getCodigo(){
            return $this->codigo;
        }
        public function setCodigo($cod){
            $this->codigo = $cod;
        }
        public function getNome(){
            return $this->nome;
        }
        public function setNome($nome){
            $this->nome = $nome;
        }
        public function getIngredientes(){
            return $this->ingredientes;
        }
        public function setIngredientes($ingredientes){
            $this->ingredientes = $ingredientes;
        }
        public function getNomeImagem(){
            return $this->nomeImagem;
        }
        public function setNomeImagem($nomeImagem){
            $this->nomeImagem = $nomeImagem;
        }

        public function validate(){
            $erros = array();
            if(empty($this->getNome())){
                $erros[] = "É necessário informar um nome";
            }
            if(empty($this->getIngredientes())){
                $erros[] = "É necessário informar a lista de ingredientes";
            }
            if(empty($this->getNomeImagem())){
                $erros[] = "É necessário selecionar uma imagem";
            }
            return $erros;
        }
    }
?>
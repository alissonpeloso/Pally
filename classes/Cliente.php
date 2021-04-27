<?php
    class Cliente{
        private $codigo;
        private $nome;
        private $email;
        private $telefone;
        private $dataNascimento;
        private $senha;
        private $confirmSenha;
        private $bairro;
        private $endereço;

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
        public function getEmail(){
            return $this->email;
        }
        public function setEmail($email){
            $this->email = $email;
        }
        public function getTelefone(){
            return $this->telefone;
        }
        public function setTelefone($telefone){
            $this->telefone = $telefone;
        }
        public function getDataNascimento(){
            return $this->dataNascimento;
        }
        public function setDataNascimento($dataNascimento){
            $this->dataNascimento = $dataNascimento;
        }
        public function getSenha(){
            return $this->senha;
        }
        public function setSenha($senha){
            $this->senha = $senha;
        }
        public function getConfirmSenha(){
            return $this->confirmSenha;
        }
        public function setConfirmSenha($confirmSenha){
            $this->confirmSenha = $confirmSenha;
        }
        public function getBairro(){
            return $this->bairro;
        }
        public function setBairro($bairro){
            $this->bairro = $bairro;
        }
        public function getEndereço(){
            return $this->endereço;
        }
        public function setEndereço($endereço){
            $this->endereço = $endereço;
        }

        public function validade(){
            $erros = array();
            if(empty($this->getNome())){
                $erros[] = "É necessário informar um Nome";
            }
            if(empty($this->getEmail())){
                $erros[] = "É necessário informar um E-mail";
            }
            elseif(!filter_var($this->getEmail(), FILTER_VALIDATE_EMAIL)){
                $erros[] = "Formato de e-mail inválido";
            }
            if(empty($this->getSenha())){
                $erros[] = "É necessário informar uma Senha";
            }
            elseif(strlen($this->getSenha()) < 6){
                $erros[] = "A senha precisa ter no mínimo 6 caracteres";
            }
            elseif ($this->getSenha() != $this->getConfirmSenha()){
                $erros[] = "As senhas inseridas não coincidem";
            }

            if(count($erros) == 0){
                $newSenha = password_hash($this->getSenha(), PASSWORD_DEFAULT);
                $newConfirmSenha = password_hash($this->getConfirmSenha(), PASSWORD_DEFAULT);

                $this->setSenha($newSenha);
                $this->setConfirmSenha($newConfirmSenha);
            }
            return $erros;
        }
    }
?>
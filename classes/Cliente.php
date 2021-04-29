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
        private $endereco;

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
        public function getEndereco(){
            return $this->endereco;
        }
        public function setEndereco($endereco){
            $this->endereco = $endereco;
        }

        public function validate(){
            $erros = array();

            // Validação do nome
            $pattern = "/^[A-Za-záàâãéèêíïóôõöúçñÁÀÂÃÉÈÍÏÓÔÕÖÚÇÑ'\s]+$/";
            if(empty($this->getNome())){
                $erros[] = "É necessário informar um Nome";
            }
            elseif(strlen($this->getNome()) < 3 || !preg_match($pattern, $this->getNome())){
                $erros[] = "Insira um Nome válido";
            }
            elseif(strlen($this->getNome()) > 50){
                $erros[] = "Por favor insira menos de 50 caracteres para o seu nome";
            }

            // Validação do E-mail
            if(empty($this->getEmail())){
                $erros[] = "É necessário informar um E-mail";
            }
            elseif(!filter_var($this->getEmail(), FILTER_VALIDATE_EMAIL)){
                $erros[] = "Formato de E-mail inválido";
            }

            // Validação do Telefone
            if(empty($this->getTelefone())){
                $erros[] = "É necessário informar um Telefone";
            }
            elseif(!preg_match('^\d{10,11}$^', $this->getTelefone())){
                $erros[] = "Formato de Telefone inválido. ex: 49999999999";
            }

            // Validação da Senha
            if(empty($this->getSenha())){
                $erros[] = "É necessário informar uma Senha";
            }
            elseif(strlen($this->getSenha()) < 6 || strlen($this->getSenha()) > 60){
                $erros[] = "A Senha precisa ter no mínimo 6 caracteres e no máximo 60";
            }
            elseif ($this->getSenha() != $this->getConfirmSenha()){
                $erros[] = "As Senhas inseridas não coincidem";
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
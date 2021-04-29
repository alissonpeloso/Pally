<div class="content">
    <main>
        <section class="main-content"> 
        <h2><?= $titulo ?></h2>
        <hr>
        <br>
        <div class="erro_cadastro">
        <?php
        if(isset($erros) && count($erros) !=0){
            echo "<ul>";
            foreach($erros as $e)
                echo "<li>$e</li>";
            echo "</ul>";
        }

        $nome = isset($_POST['field_name']) ? $_POST['field_name'] : $customer->getNome();
        $email = isset($_POST['field_email']) ? $_POST['field_email'] : $customer->getEmail();
        $telefone = isset($_POST['field_phone']) ? $_POST['field_phone'] : $customer->getTelefone();
        $dtnasc = isset($_POST['field_birth']) ? $_POST['field_birth'] : $customer->getDataNascimento();
        $senha = isset($_POST['field_password']) ? $_POST['field_password'] : $customer->getSenha();
        $confirmsenha = isset($_POST['field_confirm-password']) ? $_POST['field_confirm-password'] : $customer->getConfirmSenha();
        $bairro = isset($_POST['field_bairro']) ? $_POST['field_bairro'] : $customer->getBairro();
        $endereco = isset($_POST['field_address']) ? $_POST['field_address'] : $customer->getEndereco();
        $cod = isset($_POST['field_codigo']) ? $_POST['field_codigo'] : $customer->getCodigo();

        ?>
        </div>
        <br><br>

        <form action="" method="POST" id="register-form" enctype="multipart/form-data">
                <div class="text-input">
                    <label for="name"><img src="../assets/img/icons/name.png" alt="name.png"></label>
                    <input type="text" id="name_register" name="field_name" placeholder="Nome Completo" value="<?=$nome?>">
                </div>

                <div class="text-input">
                    <label for="email"><img src="../assets/img/icons/mail.png" alt="e-mail.png"> </label>
                    <input type="email" id="email_register" name="field_email" placeholder="E-mail" value="<?=$email?>"><br>
                </div>

                <div class="text-input">
                    <label for="phone"><img src="../assets/img/icons/phone.svg" alt="phone.svg"> </label>
                    <input type="tel" id="phone_register" name="field_phone" placeholder="Telefone" value="<?=$telefone?>" ><br>
                </div>

                <div class="text-input" id="birth-date">
                    <label for="birth-date"><img src="../assets/img/icons/calendar.png" alt="calendar.png"> </label>
                    <input type="text" onfocus="(this.type='date')" onblur="(this.type='text')" id="birthDate_register" name="field_birth" placeholder="Data de Nascimento" value="<?=$dtnasc?>"><br>
                </div>

                <div class="text-input"> 
                    <label for="password"><img src="../assets/img/icons/padlock.png" alt="password.png"> </label>
                    <input type="password" id="password_register" name="field_password" placeholder="Senha"><br>
                </div>

                <div class="text-input"> 
                    <label for="confirm-password"><img src="../assets/img/icons/padlock.png" alt="password.png"> </label>
                    <input type="password" id="confirm-password_register" name="field_confirm-password" placeholder="Confirme sua senha"><br>
                </div>

                <div class="text-input"> 
                    <label for="bairro"><img src="../assets/img/icons/local.png" alt="local.png"> </label>
                    <input type="text" id="bairro_register" name="field_bairro" placeholder="Bairro" value="<?=$bairro?>"><br>
                </div>

                <div class="text-input"> 
                    <label for="address"><img src="../assets/img/icons/local.png" alt="local.png"> </label>
                    <input type="text" id="address_register" name="field_address" placeholder="Endereço (Rua - Nº)" value="<?=$endereco?>"><br>
                </div>

                <div class="check-input">
                    <label>
                        <input type="checkbox" name="field_promo1" value="sim">
                        Quero receber e-mails promocionais da Pally
                    </label>
                </div>
            
                <div id="buttons">
                    <div class="btn-default" id="btn-register">
                        <input type="submit" value="Cadastrar" name="alterar"> <br>
                    </div>
    
                    <div id="btn-clear">
                        <input type="reset" value="Limpar Dados"><br>
                    </div>
                </div>
            </form>
        </section>

    </main>
</div>
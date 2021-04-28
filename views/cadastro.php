<div class="content">
    <main>
        <section class="main-content">
            <h2> <img src="assets/img/icons/enter.png" alt="enter.png"> Cadastro</h2>
            <fieldset>

            <form action="" method="POST" id="register-form" onsubmit="return check_register()">
                <div class="text-input">
                    <label for="name"><img src="assets/img/icons/name.png" alt="name.png"></label>
                    <input type="text" id="name_register" name="field_name" placeholder="Nome Completo">
                </div>

                <div class="text-input">
                    <label for="email"><img src="assets/img/icons/mail.png" alt="e-mail.png"> </label>
                    <input type="email" id="email_register" name="field_email" placeholder="E-mail" ><br>
                </div>

                <div class="text-input">
                    <label for="phone"><img src="assets/img/icons/phone.svg" alt="phone.svg"> </label>
                    <input type="tel" id="phone_register" name="field_phone" placeholder="Telefone" ><br>
                </div>

                <div class="text-input" id="birth-date">
                    <label for="birth-date"><img src="assets/img/icons/calendar.png" alt="calendar.png"> </label>
                    <input type="text" onfocus="(this.type='date')" onblur="(this.type='text')" id="birthDate_register" name="field_birth" placeholder="Data de Nascimento" value="<?=$dtnasc?>"><br>
                </div>

                <div class="text-input"> 
                    <label for="password"><img src="assets/img/icons/padlock.png" alt="password.png"> </label>
                    <input type="password" id="password_register" name="field_password" placeholder="Senha" ><br>
                </div>

                <div class="text-input"> 
                    <label for="confirm-password"><img src="assets/img/icons/padlock.png" alt="password.png"> </label>
                    <input type="password" id="confirm-password_register" name="field_confirm-password" placeholder="Confirme sua senha"><br>
                </div>

                <div class="text-input"> 
                    <label for="bairro"><img src="assets/img/icons/local.png" alt="local.png"> </label>
                    <input type="text" id="bairro_register" name="field_bairro" placeholder="Bairro"><br>
                </div>

                <div class="text-input"> 
                    <label for="address"><img src="assets/img/icons/local.png" alt="local.png"> </label>
                    <input type="text" id="address_register" name="field_address" placeholder="Endereço (Rua - Nº)" ><br>
                </div>

                <div class="check-input">
                    <label>
                        <input type="checkbox" name="field_promo1" value="sim">
                        Quero receber e-mails promocionais da Pally
                    </label>
                </div>
            
                <div id="buttons">
                    <div class="btn-default" id="btn-register">
                        <input type="submit" value="Cadastrar" name="cadastrar"> <br>
                    </div>
    
                    <div id="btn-clear">
                        <input type="reset" value="Limpar Dados"><br>
                    </div>
                </div>
                <hr>
                <a href="index.php?action=cliente">Já possuo cadastro</a>
            </form>
            </fieldset>
        </section>
        <!-- Promoções -->
        <aside id="promotions">
            <h3><b>Promoção:</b> Frete Grátis</h3>
            <p>Comprando uma pizza calotona, você recebe a pizza em casa sem custo no frete.</p>
            <img src="assets/img/icons/motocicleta.png" alt="moto.png" id="moto-img">
        </aside>
    </main>
</div>
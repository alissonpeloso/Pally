<div class="content">
    <main>
        <section class="main-content">
            <h2> <img src="assets/img/icons/enter.png" alt="enter.png"> Área do Cliente</h2>
            <fieldset>
            <legend>Faça seu Login</legend>
            <form action="" method="POST" id="login-form" onsubmit="return check_login()">
                <div class="text-input">
                    <label for="email"><img src="assets/img/icons/mail.png" alt="e-mail.png"> </label>
                    <input type="email" id="email_login" name="field_email" placeholder="E-mail"><br>
                </div>

                <div class="text-input"> 
                    <label for="password"><img src="assets/img/icons/padlock.png" alt="password.png"> </label>
                    <input type="password" id="password_login" name="field_password" placeholder="Senha"><br>
                </div>
                
                <div id="buttons">
                    <div class="btn-default" id="btn-login">
                        <input type="submit" value="Entrar"> <br>
                    </div>
    
                    <div id="btn-clear">
                        <input type="reset" value="Limpar Dados"><br>
                    </div>
                </div>
                <hr>
                <a href="index.php?action=cadastro">Faça seu Cadastro</a>
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
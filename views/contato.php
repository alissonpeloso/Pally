<!-- Conteúdo principal -->
<div class="content">
    <main>
        <section class="main-content">
            <h2> <img src="assets/img/icons/livro-de-contato.png" alt="contato.png"> Contato</h2>
            <form action="" id="message-form" onsubmit="return check_message()">
                <div class="text-input">
                    <label for="uname"></label>
                    <input type="text" id="uname" name="uname" placeholder="Nome"><br>
                </div>
                <div class="text-input">
                    <label for="umail"></label>
                    <input type="email" id="umail" name="umail" placeholder="E-mail"><br>
                </div>
                <div class="text-input">
                    <label for="usubject"></label>
                    <input type="text" id="usubject" name="usubject" placeholder="Assunto"><br>
                </div>
                <div class="text-input">
                    <label for="umessage"></label>
                    <textarea name="mensagem" id="umessage" placeholder="Escreva sua mensagem"></textarea>
                </div>
                <div class="btn-default" id="message-send">
                    <input type="submit" value="Enviar Mensagem"><br>
                </div>
            </form>
    
        </section>
        <!-- Promoções -->
        <aside id="promotions">
            <h3><b>Promoção:</b> Frete Grátis</h3>
            <p>Comprando uma pizza calotona, você recebe a pizza em casa sem custo no frete.</p>
            <img src="assets/img/icons/motocicleta.png" alt="moto.png" id="moto-img">
        </aside>
    </main>
</div>

<div id="map">
    <address> <b>Endereço:</b> Rua Ficticia, 000, Bairro Inexistente, Imagination City</address>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d886.8618648238636!2d-52.028686270757!3d-27.236492406526928!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94e37f66ddb1afe9%3A0x5e9796f83649ee63!2sR.%20Ivo%20Biezus%2C%20564%20-%20Floresta%2C%20Conc%C3%B3rdia%20-%20SC%2C%2089700-000!5e0!3m2!1spt-BR!2sbr!4v1614779646071!5m2!1spt-BR!2sbr" loading="lazy"></iframe>
</div>
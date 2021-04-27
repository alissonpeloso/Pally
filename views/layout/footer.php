    <!-- Chat -->
    <div id="chat" class="closed">
        <div id="header">
            <h4>Envie-nos uma Mensagem</h4>
                <span class="minimize_button" onclick="minimize_chat()">&minus;</span>
                <span class="close_button" onclick="close_chat()">&#x2715;</span>
        </div>
        <div id="content">  
        </div>
        <div id="bar"><hr></div>
        <div id="message">
            <label for="send_message"><input id="send_message" type="text" placeholder="Escreva sua Mensagem"></label>
            <img id="send_button" src="assets/img/icons/send.svg" alt="send_button">
        </div>
    </div>
    <div id="chat_button" onclick="open_chat(this)">
        <img src="assets/img/icons/messenger.svg" alt="message_ballon">
        <p>Chat</p>
    </div>

    <!-- Botão do Whatsapp (Mobile) -->
    <div id="whatsapp_button">
        <a href="https://wa.link/775drv" target="_blank"><img src="assets/img/icons/whatsapp.svg" alt="whatsapp_logo"></a>
        <p>Pedir pelo <br> Whatsapp</p>
    </div>

    <!-- Rodapé -->
    <footer>
        <div id="social">
            <a href="https://api.whatsapp.com/send?phone=5549984316738" target="_blank"><img src="assets/img/social/whatsapp.png" alt="Logo Whatsapp"></a>
            <a href="https://www.facebook.com/Pally" target="_blank"><img src="assets/img/social/facebook.png" alt="Logo Facebook"></a>
            <a href="https://www.instagram.com/Pally" target="_blank"><img src="assets/img/social/instagram.png" alt="Logo Instagram"></a>
            <a href="https://www.linkedin.com/Pally" target="_blank"><img src="assets/img/social/linkedin.png" alt="Logo Linkedin"></a>
            <a href="https://www.twitter.com/Pally" target="_blank"><img src="assets/img/social/twitter.png" alt="Logo Twitter"></a>
        </div>

        <div id="infos">
            <div id="logo">
                <img src="assets/img/logo/Pally_logo.png" alt="logo Pally" id="footer-logo">
            </div>
            <div id="text">
                <p>Pally LTDA</p>
                <p>Fone: (99) 99999-9999</p>
                <address>Rua Ficticia, 000, Bairro Inexistente, Imagination City</address>
            </div>
        </div>

        <div id="copy">
            <p>© Copyright 2021. Todos os direitos reservados. | Feito com ❤ por <a href="https://github.com/alissonpeloso" target="_blank">Alisson Peloso</a></p>
        </div>
    </footer> 
    
    <script src="assets/javascript/script.js"></script>
</body>

</html>
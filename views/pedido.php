<div class="content">
    <!-- Conteúdo principal -->
    <main>
        <!-- Formulário de pedido -->
        <section class="main-content">
            <h2> <img src="assets/img/icons/pizza.png" alt="book.png"> Pedido</h2>
            <form action="" method="POST" id="order_form" onsubmit="return addOrder()">
                <hr>
                <h3>Selecione o tamanho da Pizza:</h3>
                <select name="size_pizza" id="size_pizza" onchange="selectPizzaSize()">
                    <option value="">--- Selecione ---</option>
                    <option value="p">Calotinha</option>
                    <option value="m">Calota</option>
                    <option value="g">Calotão</option>
                    <option value="gg">Calota Colossal</option>
                </select>
                <p>Você selecionou <strong id="flavorNum">0</strong> de <strong id="flavorLimit">0</strong> sabores</p>
                <div id="order">
                    <?php

                    require_once "classes/SaborDAO.php";
                    $flavors = new SaborDAO();
                    $list = $flavors->listar();
                    if(count($list) == 0){
                        echo "Nenhum sabor encontrado.";
                    }
                    else{
                        foreach ($list as $flavor){
                            ?>
                            <label class="flavor" onchange="select_flavor()">
                                <input type="checkbox" name="flavors[]" value="<?=$flavor->getCodigo()?>" onchange="updateCount()">
                                    <div class="flavor_img">
                                        <img src="assets/img/sabores/<?=$flavor->getNomeImagem()?>" alt="<?=$flavor->getNome()?>">
                                    </div>
                                    <div class="flavor_description">
                                        <strong><?=$flavor->getNome()?></strong><br>
                                        <?=$flavor->getIngredientes()?>
                                    </div>
                            </label>
                            <?php
                        }
                    }?>
                            
                </div>
                <hr>
                <h3>Selecione a opção de borda:</h3>
                <label><input type="radio" name="border" value="" checked>Sem Borda</label><br>
                <label><input type="radio" name="border" value="">Catupiry</label><br>
                <label><input type="radio" name="border" value="">Cheddar</label><br>
                <label><input type="radio" name="border" value="">Chocolate</label><br>
                <hr>
                <div class="btn-default" id="btn-cart">
                    <input type="submit" value="Adicionar ao carrinho" name="add_cart">
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
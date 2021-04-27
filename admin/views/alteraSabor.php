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
                foreach($erros as $e){
                    echo "<li>$e</li>";
                }
                echo "</ul>";
            }
            $nome = isset($_POST['field_nome']) ? $_POST['field_nome'] : $sabor->getNome();
            $ingr = isset($_POST['field_ingredientes']) ? $_POST['field_ingredientes'] : $sabor->getIngredientes();
            $cod = isset($_POST['field_codigo']) ? $_POST['field_codigo'] : $sabor->getCodigo();
            ?>
            </div>
            <br><br>

            <form action="" method="post" enctype="multipart/form-data">
                <input type="hidden" name="field_codigo" value="<?=$cod ?>">
                <div>
                    <label for="id_nome">Nome: </label>
                    <input type="text" name="field_nome" size="50" maxlength="50" id="id_nome" autofocus value="<?=$nome ?>">
                </div>
                <div>
                    <label for="id_nome">Ingredientes: </label>
                    <input type="text" name="field_ingredientes" size="100" maxlength="100" id="id_ingredientes" value="<?=$ingr?>">
                </div>
                <div>
                    <label for="id_nome">Imagem: </label>
                    <input type="file" name="field_imagem" id="id_imagem" >
                </div>
                <br>
                <div>
                    <input type="submit" value="Confirmar" name="alterar">
                    <input type="reset" value="Limpar campos">
                </div>
            </form>
        </section>
    </main>
</div>
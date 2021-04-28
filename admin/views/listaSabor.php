    <div class="content">
        <main>
            <section class="main-content">
                <h2><?=$titulo ?></h2>
                <hr>
                <br><br>
                <p>| <a href="saborController.php?action=cadastra">Inserir Novo</a> |</p>
                <div class="table">
                <table>
                <tr>
                    <th>Código</th>
                    <th>Nome</th>
                    <th>Ingredientes</th>
                    <th>Ações</th>
                </tr>
            
                <?php
                if(count($list) == 0){
                    echo "<p>Nenhum sabor encontrado.</p>";
                }
                else{
                    foreach ($list as $flavor){
                    ?>     
                        <tr>
                            <td><?=$flavor->getCodigo() ?></td>
                            <td><?=$flavor->getNome() ?></td>
                            <td><?=$flavor->getIngredientes() ?></td>
                            <td>
                            <a href="saborController.php?action=altera&cod=<?=$flavor->getCodigo() ?>">alterar</a> 
                            | 
                            <a href="saborController.php?action=exclui&cod=<?=$flavor->getCodigo() ?>" 
                            onclick="return confirm('Tem certeza de que deseja excluir este sabor?')">excluir</td>
                        </tr>
                    <?php
                    }
                }
                ?>
                </table>
                </div>
            </section>
        </main>
    </div>
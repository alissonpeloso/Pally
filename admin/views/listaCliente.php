<div class="content">
    <main>
        <section class="main-content">
            <h2><?=$titulo?></h2>
            <hr>
            <br><br>
            <p><a href="clienteController.php?action=cadastra">Inserir Novo</a></p>
            <div class="table">
            <table>
                <tr>
                    <th>Código</th>
                    <th>Nome</th>
                    <th>E-mail</th>
                    <th>Telefone</th>
                    <th>Data de Nascimento</th>
                    <th>Senha</th>
                    <th>Bairro</th>
                    <th>Endereço</th>
                    <th>Ações</th>

                </tr>

                <?php
                if(count($list) == 0){
                    echo "<p>Nenhum sabor encontrado.</p>";
                }
                else{
                    foreach ($list as $customer){
                    ?>
                        <tr>
                            <td><?=$customer->getCodigo()?></td>
                            <td><?=$customer->getNome()?></td>
                            <td><?=$customer->getEmail()?></td>
                            <td><?=$customer->getTelefone()?></td>
                            <td><?=$customer->getDataNascimento()?></td>
                            <td>••••••</td>
                            <td><?=$customer->getBairro()?></td>
                            <td><?=$customer->getEndereco()?></td>
                            <td>
                            <a href="clienteController.php?action=altera&cod=<?=$customer->getCodigo()?>">Alterar</a>
                            |
                            <a href="clienteController.php?action=exclui&cod=<?=$customer->getCodigo()?>" onclick="return confirm('Tem certeza que deseja excluir esse cliente?')">Excluir</a>
                            </td>
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
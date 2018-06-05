<header id="categoria-header">
    <article id="container-header-categoria">
        <h2 class="text-center">Resultado da Pesquisa</h2>
        <h4 class="text-center"> Encontrados <?= $quantidade; ?> </h4>

        <?php if (isset($_SESSION['success'])) { ?>
            <p class="text-center text-success"><?= $_SESSION['success']; ?></p>
            <?php unset($_SESSION['success']);
        } else if (isset($_SESSION['danger'])) { ?>
            <p class="text-center text-danger"><?= $_SESSION['danger']; ?></p>
        <?php } ?>


        <section id="cat-header" class="flex-row">
            <ul id="lista-categoria-descricao" class="lista">
                <?php foreach ($listar as $item) : ?>

                    <li>
                        <section class="secao-header" class="flex-column">
                            <h4 class="text-defull text-capitalize"><?= $item->nome ?></h4>
                            <img class="img-categoria-descricao"
                                 src="../../Lapserver-perfil/arquivo.php?arquivo_id=<?php echo $item->arquivo_id; ?>"/>
                        </section>
                        <section class="secao-corpo flex-row-between" style="width: 70%">
                            <div class="flex-column-end">
                                <span class="text-defull-lg"><?= $item->bio ?></span>
                                <span class="text-defull-sm"><?= $item->area_conhecimento?></span>
                                <span class="text-defull-sm">Contato: <?= $item->email?> / <?= $item->telefone?> </span>
                            </div>
                            <div>
                                     <span>
                                        <form action="contrato.php" method="post">
                                            <input type="hidden" name="id" value="<?=$item->id?>">
                                            <input type="hidden" name="entidade" value="profissionais">
                                            <input type="submit" value="Notificar" class="btn btn-primary">
                                        </form>
                                    </span>
                            </div>
                        </section>
                    </li>
                <?php endforeach; ?>
            </ul>
        </section>
    </article>
</header>
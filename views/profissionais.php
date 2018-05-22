<?php
require_once('../models/Entidade.php');
require_once('../models/Banco.php');

$pdo = Conecta();
$profissionais = ListarEntidades($pdo, 'profissionais');
?>
<section id="profissionais">
<header id="categoria-header">
    <article id="container-header-categoria">
        <h2 class="text-center">Profisionais em destaque</h2>
        <section id="cat-header" class="flex-row">
            <ul id="lista-categoria-descricao" class="lista">
                <?php foreach ($profissionais as $item) : ?>

                    <li>
                        <section class="secao-header" class="flex-column">
                            <h4 class="text-defull text-capitalize"><?= $item->nome ?></h4>
                            <img class="img-categoria-descricao"
                                 src="../../Lapserver-perfil/arquivo.php?arquivo_id=<?php echo $item->arquivo_id; ?>"/>
                        </section>
                        <section class="secao-corpo flex-row-between-wrap" style="width: 70%">
                            <div class="flex-column-end">
                                <span class="text-defull-lg"><?= $item->bio ?></span>
                                <span class="text-defull-sm"><?= $item->area_conhecimento ?></span>
                                <span class="text-defull-sm">Contato: <?= $item->email ?>
                                    / <?= $item->telefone ?> </span>
                            </div>
                            <div>
                                <span>
                                    <form action="notificar.php" method="post">
                                        <input type="hidden" name="id" value="<?=$item->id?>">
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
</section>
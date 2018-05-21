<?php
require_once('../models/Entidade.php');
require_once('../models/Banco.php');

$pdo = Conecta();
$profissionais = ListarEntidades($pdo, 'profissionais');
?>
<div id="profissionais" class="profissionais flex-column-end">
    <h1 class="text-center text-defull">Profissionais em destaque</h1>

    <div class=" flex-row-wrap">

        <?php

        foreach($profissionais as $p):
            ?>

            <div class="card" style="width: 400px">
                <div class="card-header text-capitalize">
                    <?=$p->nome;?>
                </div>
                <div class="card-body" style="padding: 10px;">
                    <h5 class="card-title">Contato</h5>
                    <p class="card-text"><?=$p->email?></p>
                </div>
                <div class="card-body" style="padding: 10px;">
                    <h5 class="card-title">Contato</h5>
                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                    <a href="#?id=<?=$p->id;?>" class="btn btn-primary">SAIBA MAIS</a>
                </div>
            </div>
        <?php endforeach; ?>

    </div>
</div>
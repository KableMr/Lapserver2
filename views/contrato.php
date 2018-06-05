<?php
require_once('../models/Entidade.php');
require_once('../models/Banco.php');
require_once('../../Lapserver-perfil/class/ServicosDao.php');

$pdo = Conecta();
$entidade = $_POST['entidade'];

$id = $_POST['id'];

$listarServicos = new ServicosDao($pdo);
$lista = $listarServicos->ListarServicos($id);


$profissionais = ListarEntidadesPerfil($pdo, $entidade, $id);
foreach ($profissionais

as $item){
?>
<!DOCTYPE html>
<html>
<head>
    <?php require_once("head.php"); ?>
</head>
<body>
<?php require_once("menu_container.php"); ?>
<section id="profile_contrato">
    <span class="text-defull-lg">Perfil</span>
</section>

<section id="perfil-container" class="flex-row">
    <article id="thumb-perfil" class="flex-column">
        <img src="../../Lapserver-perfil/arquivo.php?arquivo_id=<?php echo $item->arquivo_id; ?>"
             class="img-circle user-medias-img" alt="image not found">
        <span class="text-thumb text-capitalize"><?= $item->nome ?></span>
        <span class="text-thumb text-capitalize"><?= $item->area_conhecimento ?></span>

        <span id="botao-notificar" class="text-thumb botao-notificar">
            Notificar
        </span>
    </article>
</section>
<section class="info-perfil">
    <article class="contatos-info">
        <div class="container">
            <table class="table">
                <tr>
                    <td>
                        <h4>Informações pessoais</h4>
                        <div class="text-capitalize">Formação: <?= $item->formacao ?></div>
                        <div class="text-capitalize">Área de conhecimento: <?= $item->area_conhecimento ?></div>
                        <div>contato: <?= $item->email ?> / <?= $item->telefone ?></div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <h4>Serviços</h4>
                        <?php foreach ($lista as $servicosLista) : ?>
                            <div class="info-box bg-yellow">
                                <span class="info-box-icon"><i class="fa fa-smile"></i></span>

                                <div class="card-header">
                                    <div class="info-box-text"><?= $servicosLista->nome ?></div>
                                    <div class="info-box-number"><?= $servicosLista->categoria_id ?></div>
                                    <div class="info-box-text">Data Início : <?= $servicosLista->dataInicio ?></div>
                                    <div class="info-box-text">Data de Término: <?= $servicosLista->dataTermino ?></div>
                                    <div class="progress-description">
                                        <?= $servicosLista->email ?> <?= $servicosLista->telefone ?>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar" style="width: 50%"></div>
                                    </div>

                                </div>
                                <!-- /.info-box-content -->
                            </div>
                        <?php endforeach; ?>

                    </td>
                </tr>
            </table>
        </div>
    </article>
</section>
<?php } ?>
<?php require_once("planos.php"); ?>
<?php require_once("rodape.php"); ?>
</body>

<?php if(isset($_SESSION['empresa_logada'])) {  ?>
    <section class="modal-container flex-row">
        <section class="notificar-modal">
            <div class="container">
                <div class="flex-row-between-wrap">
                    <h4 class="text-thumb white">Serviços AP notifica!</h4>
                    <span id="fechar-notifica" class="text-thumb white">Fechar</span>
                </div>
                <form action="../controller/efetuaNotificacao.php" method="post">
                    <input type="hidden" name="entidade_id" value="<?=$id?>">
                    <table class="table">
                        <tr>
                            <td class="flex-column">
                                <span class="text-thumb white">Mande uma mensagem</span>
                                <textarea name="msg-notifica" class="mensagem-notifica"></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <button class="botao-notificar">Enviar notificação</button>
                            </td>
                        </tr>
                    </table>
                </form>
            </div>
        </section>
    </section>
<?php } else { ?>
    <section id="erro-notifica">
        <p class="alert-danger">Você precisa fazer login para notificar!</p>
    </section>
<?php } ?>
</html>
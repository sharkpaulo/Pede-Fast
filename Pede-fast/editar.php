<?php
    session_start();
    include_once 'includes/header.inc.php';
    include_once 'includes/menu.inc.php';
?>

<div class="row container">
    <div class="col s12">
        <h5 class="light">Edição de Registros</h5><hr>
    </div>
</div>

<?php
    include_once 'banco_de_dados/conexao.php';
    $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
    $_SESSION['id'] = $id;
    $querySelect = $link->query("select * from tb_produtos where id='$id'");

    while($registros = $querySelect->fetch_assoc()):
        $nome = $registros['nome'];
        $preco = $registros['preco'];
        $descricao = $registros['descricao'];
        $categoria = $registros['categoria'];
    endwhile;
?>

<!--FORMULÁRIO DE CADASTRO-->
<div class="row container">
        <p>&nbsp;</p>
        <form action="banco_de_dados/update.php" method="post" class="col s12">
            <fieldset class="formulario" style="padding:15px">
                <legend><img src="imagens/avatar.png" alt="avatar" width="100"></legend>
                <h5 class="light center">Alteração</h5>

                <!--CAMPO NOME-->
                <div class="input-field col s12">
                    <i class="material-icons prefix">account_circle</i>
                    <input type="text" name="nome" id="nome" value="<?php echo $nome ?>" maxlength="40" required autofocus>
                    <label for="nome">Nome do Produto</label>
                </div>

                <!--CAMPO PREÇO-->
                <div class="input-field col s12">
                    <i class="material-icons prefix">mode_edit</i>
                    <input type="number" name="preco" value="<?php echo $preco ?>" id="preco" required>
                    <label for="preco">Preço</label>
                </div>

                <!--CAMPO DESCRIÇÃO-->
                <div class="input-field col s12">
                    <i class="material-icons prefix">description</i>
                    <input type="text" name="descricao" value="<?php echo $descricao?>" id="descricao" maxlength="250" required>
                    <label for="descricao">Descrição do produto</label>
                </div>


                <!--CAMPO CATEGORIA-->
                <div class="input-field col s12">
                    <i class="material-icons prefix">assignment</i>
                    <input type="text" name="categoria" value="<?php echo $categoria?>" id="categoria" maxlength="250" required>
                    <label for="categoria">Categoria</label>
                </div>

                <!--BOTOES-->
                <div class="input-field col s12">
                    <input type="submit" value="Alterar" class="btn blue">
                    <a href="consultas.php" class="btn red">Cancelar</a>
                </div>
            </fieldset>
        </form>


<?php include_once 'includes/footer.inc.php' ?>
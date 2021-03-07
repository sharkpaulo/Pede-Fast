<?php
session_start();
?>
<?php include_once 'includes/header.inc.php'?>
    
    <?php include_once 'includes/menu.inc.php'?>

    <!--FORMULÁRIO DE CADASTRO-->
    <div class="row container">
        <p>&nbsp;</p>
        <form action="banco_de_dados/create.php" method="post" class="col s12">
            <fieldset class="formulario" style="padding:15px">
                <legend><img src="imagens/avatar.png" alt="avatar" width="100"></legend>
                <h5 class="light center">Cadastro de produtos</h5>
                <?php 
                    if(isset($_SESSION['msg'])):
                        echo $_SESSION['msg'];
                        session_unset();
                    endif;
                ?>

                <!--CAMPO NOME-->
                <div class="input-field col s12">
                    <i class="material-icons prefix">account_circle</i>
                    <input type="text" name="nome" id="nome" maxlength="40" required autofocus>
                    <label for="nome">Nome do Produto</label>
                </div>

                <!--CAMPO PREÇO-->
                <div class="input-field col s12">
                    <i class="material-icons prefix">mode_edit</i>
                    <input type="number" name="preco" id="preco" required>
                    <label for="preco">Preço</label>
                </div>

                <!--CAMPO DESCRIÇÃO-->
                <div class="input-field col s12">
                    <i class="material-icons prefix">description</i>
                    <textarea class="materialize-textarea" name="descricao" id="descricao" cols="30" rows="10" required style="resize:none" maxlength="250"></textarea>
                    <label for="descricao">Descrição do produto</label>
                </div>


                <!--CAMPO CATEGORIA-->
                <div class="input-field col s12">
                    <i class="material-icons prefix">assignment</i>
                    <textarea class="materialize-textarea" name="categoria" id="categoria" cols="30" rows="10" required style="resize:none" maxlength="250"></textarea>
                    <label for="categoria">Categoria</label>
                </div>

                <!--BOTOES-->
                <div class="input-field col s12">
                    <input type="submit" value="Cadastrar" class="btn blue">
                    <input type="reset" value="Limpar" class="btn red">
                </div>
            </fieldset>
        </form>
    </div>
    <?php include_once 'includes/footer.inc.php'?>
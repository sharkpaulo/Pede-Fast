<?php
    include_once 'includes/header.inc.php';
    include_once 'includes/footer.inc.php';
    $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
    

?>

<?php 
echo "<h4 class='light '>Quer mesmo excluir esses registros?</h1><hr>";
echo "<div class='input-field col s12'><a href='banco_de_dados/delete.php?id=$id' class='btn blue center'>Sim</a> <a href='consultas.php' class='btn red center'>Não</a> </div><!--Confirmação de exclusão-->";
?>
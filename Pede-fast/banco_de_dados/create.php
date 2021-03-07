<?php
    session_start();
    include_once 'conexao.php';

    $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
    $preco = filter_input(INPUT_POST, 'preco', FILTER_SANITIZE_NUMBER_INT);
    $descricao = filter_input(INPUT_POST, 'descricao', FILTER_SANITIZE_SPECIAL_CHARS);
    $categoria = filter_input(INPUT_POST, 'categoria', FILTER_SANITIZE_SPECIAL_CHARS);

    $querySelect = $link->query("select nome from tb_produtos");
    $array_nomes = [];

    while($nomes = $querySelect->fetch_assoc()):
        $nomes_existentes = $nomes['nome'];
        array_push($array_nomes,$nomes_existentes);
    endwhile;

    if(in_array($nome,$array_nomes)) :
        $_SESSION['msg'] = "<p class='center red-text'>".'Já existe um produto com esse nome'."</p>";
        header("Location:../");
    else:
        $queryInsert = $link->query("insert into tb_produtos values(default,'$nome','$preco','$descricao', '$categoria')");
        $affected_rows = mysqli_affected_rows($link);

        if($affected_rows > 0):
            $_SESSION['msg'] = "<p class='center green-text'>".'Cadastro efetuado com sucesso'."<br>";
            header("Location:../");
        endif;
    endif;
?>
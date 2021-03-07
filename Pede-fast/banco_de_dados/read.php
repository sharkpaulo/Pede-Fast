<?php

    include_once 'conexao.php';


    $querySelect = $link->query("select * from tb_produtos");
    while($registros = $querySelect->fetch_assoc()):
        $id = $registros['id'];
        $nome = $registros['nome'];
        $preco = $registros['preco'];
        $descricao = $registros['descricao'];
        $categoria = $registros['categoria'];

        echo "<tr>";
        echo "<td>$nome</td>
              <td>$preco</td>
              <td>$descricao</td>
              <td>$categoria</td>
              <td><a href='editar.php?id=$id'><i class='material-icons'>edit</i></a></td>
              <td><a href='confirm_del.php?id=$id'><i class='material-icons'>delete</i></a></td>";
        echo "</tr>";
    endwhile;
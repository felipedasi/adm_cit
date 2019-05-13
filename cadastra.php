<meta http-equiv="refresh" content="0;URL=index.php">

<?php
require 'conexao.php';
$item = $_POST['item'];
$nome = $_POST['nome'];




//insere no banco

$qtd= $conm->exec("INSERT INTO itens (id, item, aluno) VALUES (NULL,'$item','$nome')");


 
?>
<script>
alert("Item cadastrado com sucesso!")

</script>
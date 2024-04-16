<?php
include('config.php');
$sql = mysqli_query($conexao, "SELECT * FROM alunos") or die("Erro");
$linhas = mysqli_num_rows($sql);
echo "Foram encontrados $linhas registros <br>";

while($dados = mysqli_fetch_assoc($sql)){

?>
<a href="alterar.php?id_aluno=<?php echo($dados['id']); ?>">[Alterar]> </a>
<a href="excluir.php?id_aluno=<?php echo($dados['id']); ?>">[Excluir]> </a>

<?php

echo $dados['id']. ' - ' .$dados['nome'].' -> ' .$dados['email']. ' -> '.$dados['nascimento']. '<br>';

}
?>
<?php

include('config.php');

if($_POST['nome']=='')
{
    echo'Por favor, preencha o nome do aluno';
}
if($_POST['email']==''){
    echo 'Por favor, preencha o curso do aluno';
}
else if($_POST['nascimento']==''){
    echo 'Por favor, preencha o curso do aluno';
}

$nome = $_POST['nome'];
$email_aluno = $_POST['email'];
$nascimento_aluno = $_POST['nascimento'];

$in = mysqli_query($conexao, "INSERT INTO alunos(nome, email, nascimento)
values ('$nome', '$email_aluno', '$nascimento_aluno')") or die("Erro");
if($in){
    echo 'Cadastro afetuado com sucesso';
}

?>
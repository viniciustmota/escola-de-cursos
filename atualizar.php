<?php
include('config.php');

if($_GET['id']==''){
    echo 'Por favor, informe o ID do aluno';
}else{
    $id_aluno=$_GET['id'];
    if($_POST['nome_aluno']==''){
        echo 'Por favor, preencha o nome do aluno';
    }if($_POST['email_aluno'] == '')
    {
        echo 'Por favor, preencha o email do aluno';
    }
    else if($_POST['nascimento_aluno'] == '')
    {
        echo 'Por favor, preencha a data de nascimento do aluno';
    }

    $nome_aluno = $_POST['nome_aluno'];
    $curso_aluno = $_POST['curso_aluno'];

    $atualizar=mysqli_query($conexao, "update aluno set nome_aluno='$nome_aluno', dataDeNascimento='$nascimento_aluno,email_aluno='$email_aluno' where id_aluno='$id_aluno'") or die ("Erro");
    echo 'Registro atualizado com sucesso!';
}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Aluno</title>
</head>
<body>
    <h2>Cadastro de Aluno</h2>
    <form action="cadastro.php" method="post">
        <p>Aluno:</p>
        <input type="text" name="nome" id="nome">
        <p>Email:</p>
        <input type="email" name="email" id="email">
        <p>Data de Nascimento:</p>
        <input type="date" name="nascimento" id="nascimento">
        <br><br>
        <input type="submit" value="Cadastrar">
    </form>
    
</body>
</html>

<!-- <p>Curso:</p>
        <input type="text" name="curso_aluno" id="curso_aluno">
        <p>Duração do curso:</p>
        <input type="text" name="duracao_aluno" id="duracao_aluno">
and "INSERT INTO curso(curso_aluno, duracao_aluno)
values ('$curso_aluno', '$duracao_aluno'") -->
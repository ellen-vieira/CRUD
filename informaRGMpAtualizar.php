<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Recebe o RGM</title>
</head>
<body>
    <div class="container">
    <h3>Atualização de Dados</h3>
    <form action="formAtualizaBD.php" method="POST">
        Informe o RGM do aluno:
        <input type="numeric" name="rgm">
        <input type="submit" value="Consultar">
    </form>
    <a href="index.php"><button>Voltar ao Menu</button></a>
    </div>
</body>
</html>

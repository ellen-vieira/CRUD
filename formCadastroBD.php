<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <!-- Icon -->
    <link rel="shortcut icon" href="img/sistema.png" type="image/x-icon">
    <title>Cadastro</title>
</head>
<body>
    <div class="container">
    <h3>Formulário de Cadastro</h3>
    <form method="POST" action="cadastroEnviadoAoBD.php">
        Digite seu RGM:
        <input type="numeric" name="rgm" placeholder="Digite seu RGM..." required>
        Digite seu Nome:
        <input type="text" name="nome" placeholder="Digite seu nome...">
        Digite seu Telefone:
        <input type="numeric" name="telefone" placeholder="(XX)XXXXX-XXXX">
        Digite seu Sexo:
        <input type="text" name="sexo" placeholder="Digite seu sexo...">
        <input type="submit" value="Salvar">
        <input type="reset" value="Limpar">
    </form>
    <a href="index.php"><button>Voltar ao Menu</button></a>
    </div>
</body>
</html>
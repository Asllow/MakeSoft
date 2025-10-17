<?php
session_start();

// Definir a senha correta
$senha_correta = "senhanovagestao@"; // Nova senha definida

// Verifica se a senha foi enviada pelo formulário
if (request()->isMethod('post') && request()->has('senha')) {
    if (request('senha') === $senha_correta) {
        session(['autenticado' => true]);
        return redirect('https://docs.google.com/spreadsheets/d/1Y517ttiOSKXoP7S7crYGkC4L5l-FYQEDKpV9N3wnNLI/edit?resourcekey=&gid=1694954692#gid=1694954692');
    } else {
        $erro = "Senha incorreta. Tente novamente.";
    }
}
?>

    <!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proteção por Senha</title>
</head>
<body>
<h2>Digite a senha para acessar o formulário</h2>
<?php if (isset($erro)) echo "<p style='color:red;'>$erro</p>"; ?>
<form method="post">
    <?php echo csrf_field(); ?>
    <input type="password" name="senha" required>
    <button type="submit">Acessar</button>
</form>
</body>
</html>

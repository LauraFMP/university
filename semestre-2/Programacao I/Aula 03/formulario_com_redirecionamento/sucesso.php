<?php
session_start();
$dados = $_SESSION['dados'] ?? null;
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
<title>Sucesso</title>
<style>
  body {
    background: #ffe8f4;
    font-family: 'Press Start 2P', monospace, sans-serif;
    text-align: center;
    padding-top: 60px;
  }
  .card {
    display: inline-block;
    background: #fff;
    border: 4px solid #ff89bb;
    box-shadow: 5px 5px 0 #d15b8f;
    border-radius: 12px;
    padding: 40px 30px;
    max-width: 400px;
  }
  h1 {
    color: #ff62a6;
    margin-bottom: 20px;
    text-shadow: 2px 2px #d15b8f;
  }
  p {
    color: #4a4a4a;
    font-size: 14px;
    margin-bottom: 25px;
  }
  a {
    background: #ff62a6;
    color: #fff;
    text-decoration: none;
    padding: 12px 20px;
    border-radius: 8px;
    box-shadow: 3px 3px 0 #d15b8f;
    transition: background 0.2s;
    display: inline-block;
  }
  a:hover { background: #ff3d95; }
</style>
</head>
<body>
  <div class="card">
  <h1>✨ Dados guardados com sucesso! ✨</h1>
  <?php if ($dados): ?>
    <p><strong>Nome:</strong> <?= htmlspecialchars($dados['nome']) ?></p>
    <p><strong>Matrícula:</strong> <?= htmlspecialchars($dados['matricula']) ?></p>
    <p><strong>Email:</strong> <?= htmlspecialchars($dados['email']) ?></p>
  <?php else: ?>
    <p>Não há dados para exibir.</p>
  <?php endif; ?>
  <a href="tarefa_formulario_usuario.php">Voltar ao formulário</a>
</div>
</body>
</html>

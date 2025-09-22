<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dados Recebidos</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      background: #ffe8f4;
      font-family: "Press Start 2P", monospace, Arial, sans-serif;
      padding: 20px;
    }

    h1 {
      text-align: center;
      color: #fff;
      background: #ff62a6;
      padding: 15px;
      border: 4px solid #d15b8f;
      margin: 20px auto;
      font-size: 14px;
      text-transform: uppercase;
      box-shadow: 5px 5px 0 #d15b8f;
      width: max-content;
    }

    .container {
      background: #fff;
      padding: 20px;
      max-width: 420px;
      margin: 20px auto;
      border: 4px solid #ff89bb;
      box-shadow: 5px 5px 0 #d15b8f;
    }

    p {
      font-size: 12px;
      margin: 12px 0;
      color: #4a4a4a;
    }

    strong {
      color: #ff62a6;
    }

    .botao {
      display: block;
      text-align: center;
      margin-top: 20px;
    }

    .botao a {
      display: inline-block;
      padding: 10px 20px;
      margin: 5px;
      text-decoration: none;
      color: white;
      border-radius: 6px;
      font-weight: bold;
      box-shadow: 3px 3px 0 #317923;
    }

    .botao a.voltar {
      background: #66c992;
    }

    .botao a.voltar:hover {
      background: #37a568;
    }

    .botao a.limpar {
      background: #ff626f;
      box-shadow: 3px 3px 0 #bb2525;
    }

    .botao a.limpar:hover {
      background: #ff3d3d;
    }
  </style>
  <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet">
</head>
<body>
<?php 
  $nome              = $_POST['nome'] ?? '';
  $matricula         = $_POST['matricula'] ?? '';
  $curso             = $_POST['curso'] ?? '';
  $email_institucional = $_POST['email_institucional'] ?? '';
  $telefone          = $_POST['telefone'] ?? '';
  $endereco          = $_POST['endereco'] ?? '';
  $cep               = $_POST['cep'] ?? '';
  $cidade            = $_POST['cidade'] ?? '';
  $uf                = $_POST['uf'] ?? '';
  $curso_horas       = $_POST['curso_horas'] ?? '';
  $horas            = $_POST['horas'] ?? '';

  echo "<h1>Dados Recebidos:</h1>";
  echo '<div class="container">';
  echo "<p><strong>Nome:</strong> $nome</p>";
  echo "<p><strong>Matrícula:</strong> $matricula</p>";
  echo "<p><strong>Curso:</strong> $curso</p>";
  echo "<p><strong>Email:</strong> $email_institucional</p>";
  echo "<p><strong>Telefone:</strong> $telefone</p>";
  echo "<p><strong>Endereço:</strong> $endereco</p>";
  echo "<p><strong>CEP:</strong> $cep</p>";
  echo "<p><strong>Cidade:</strong> $cidade</p>";
  echo "<p><strong>UF:</strong> $uf</p>";
  echo "<p><strong>Curso p/ aulas complementares:</strong> $curso_horas</p>";
  echo "<p><strong>Carga horária:</strong> $horas</p>";
  echo '</div>';
?>
</body>
</html>
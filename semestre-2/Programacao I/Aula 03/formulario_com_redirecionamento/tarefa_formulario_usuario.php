<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Cadastro</title>

  <style>
    /* Reset */
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

    form {
      background: #fff;
      max-width: 420px;
      margin: 0 auto;
      padding: 25px 20px;
      border: 4px solid #ff89bb;
      box-shadow: 5px 5px 0 #d15b8f;
    }

    label {
      display: block;
      margin-bottom: 5px;
      font-size: 12px;
      color: #4a4a4a;
    }

    input[type="text"] {
      width: 100%;
      padding: 8px;
      margin-bottom: 15px;
      border: 2px solid #ffb1d2;
      border-radius: 6px;
      font-size: 12px;
    }

    input[type="submit"],
    input[type="reset"] {
      width: 48%;
      padding: 10px;
      margin-top: 10px;
      border: none;
      font-weight: bold;
      font-size: 12px;
      color: white;
      background: #ff62a6;
      cursor: pointer;
      border-radius: 6px;
      box-shadow: 3px 3px 0 #d15b8f;
      transition: background 0.2s;
    }

    input[type="reset"] {
      background: #66c992ff;
      box-shadow: 3px 3px 0 #317923ff;
    }

    input[type="submit"]:hover {
      background: #ff3d95;
    }

    input[type="reset"]:hover {
      background: #37a568ff;
    }

    .button-group {
      display: flex;
      justify-content: space-between;
    }
  </style>

  <!-- Fonte retrô opcional (Google Fonts) -->
  <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet">
</head>
<body>
  <h1>Cadastro de Aluno</h1>

  <form name="cadastro" action="processo.php" method="post">
    <label for="nome">Nome:</label>
    <input type="text" id="nome" name="nome" required>

    <label for="matricula">Matrícula:</label>
    <input type="text" id="matricula" name="matricula" required>

    <label for="curso">Curso:</label>
    <input type="text" id="curso" name="curso" required>

    <label for="email_institucional">Email:</label>
    <input type="text" id="email_institucional" name="email_institucional" required>

    <label for="telefone">Telefone:</label>
    <input type="text" id="telefone" name="telefone" required>

    <label for="endereco">Endereço:</label>
    <input type="text" id="endereco" name="endereco" required>

    <label for="cep">CEP:</label>
    <input type="text" id="cep" name="cep" required>

    <label for="cidade">Cidade:</label>
    <input type="text" id="cidade" name="cidade" required>

    <label for="uf">UF:</label>
    <input type="text" id="uf" name="uf" required>

    <label for="curso_horas">Curso p/ Aulas Complementares:</label>
    <input type="text" id="curso_horas" name="curso_horas" required>

    <label for="horas">Carga Horária:</label>
    <input type="text" id="horas" name="horas" required>

    <div class="button-group">
      <input type="submit" value="Enviar">
      <input type="reset" value="Limpar">
    </div>
  </form>
</body>
</html>
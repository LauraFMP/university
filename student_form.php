<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário para Cadastro</title>
</head>
<body>
    <style>
    body {
      background: #ffe8f4;
      font-family: Arial, sans-serif;
    }
    h1 {
      text-align: center;
      color: #fff;
      background: #ff62a6;
      padding: 15px;
      border-radius: 10px;
    }
    form {
      background: #fff;
      padding: 20px;
      width: 320px;
      margin: 20px auto;
      border: 4px solid #ff89bb;
      border-radius: 10px;
      box-shadow: 5px 5px 0 #d15b8f;
    }
    label {
      display: block;
      margin-bottom: 10px;
      font-weight: bold;
      color: #4a4a4a;
    }
    input[type="text"] {
      width: 100%;
      padding: 10px;
      border: 2px solid #ffb1d2;
      border-radius: 6px;
      margin-top: 5px;
      box-sizing: border-box;
    }
    input[type="submit"], button {
      background: #66c992ff;
      color: white;
      border: none;
      padding: 10px;
      margin-top: 10px;
      width: 100%;
      font-weight: bold;
      cursor: pointer;
      border-radius: 6px;
      box-shadow: 3px 3px 0 #317923ff;
    }
    input[type="submit"]:hover {
      background: #37a568ff;
    }
    input[type="reset"], button {
      background: #ff626fff;
      color: white;
      border: none;
      padding: 10px;
      margin-top: 10px;
      width: 100%;
      font-weight: bold;
      cursor: pointer;
      border-radius: 6px;
      box-shadow: 3px 3px 0 #bb2525ff;
    }
    input[type="reset"]:hover {
      background: #ff3d3dff;
    }
    .resultado {
      margin: 20px auto;
      width: 320px;
      text-align: center;
      padding: 12px;
      background: #ffd1e6;
      border: 2px solid #ff62a6;
      border-radius: 6px;
      font-weight: bold;
    }
  </style>
    <form name="cadastro" action="form.php" method="post">
        <label for="nome">Nome: </label>
        <input type="text" id="nome" name="nome" required><br><br>

        <label for="endereco">Endereco: </label>
        <input type="text" id="endereco" name="endereco" required><br><br>

        <label for="cidade">Cidade: </label>
        <input type="text" id="cidade" name="cidade" required><br><br>

        <input type="submit" value="Enviar"/>
        <input type="reset" name="botao" value="Limpar"/>
    </form>
</body>
</html>
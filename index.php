<?php

include_once('config.php');

if (isset($_POST['submit'])) {
    // Utilize instruções preparadas para evitar SQL Injection
    $query = "SELECT * FROM usuarios WHERE login_usuario = ? AND senha = ?";
    $stmt = $conexao->prepare($query);

    if ($stmt) {
        // Vincule os parâmetros
        $stmt->bind_param("ss", $_POST['login_usuario'], $_POST['senha']);

        // Execute a instrução preparada
        $stmt->execute();

        // Obtenha os resultados da consulta
        $result = $stmt->get_result();

        // Verifique se há pelo menos uma linha correspondente
        if ($result->num_rows > 0) {
            // Usuário autenticado com sucesso
            echo "Login bem-sucedido!";
            // Você pode redirecionar para outra página ou adicionar mais lógica aqui
        } else {
            // Credenciais inválidas
            echo "Login falhou. Verifique seu nome de usuário e senha.";
        }

        // Feche a instrução preparada
        $stmt->close();
    } else {
        echo "Erro na preparação da consulta: " . $conexao->error;
    }
}

$conexao->close();

?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fórum de Debates</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Inika', sans-serif;
            background-color: white;
        }

        .container {
            max-width: 1024px;
            margin: 0 auto;
            position: relative;
            padding: 20px;
        }

        .header {
            padding: 10px;
            border-radius: 10px;
            color: white;
            font-size: 24px;
            font-weight: 700;
            margin-bottom: 20px;
            display: flex;
        }

        .forum-title1 {
          width: 330px;
          height: 100px;
          background-color: #FF8A00;
          color: white;
          font-size: 23px;
          text-size-adjust: 30px;
          display: flex;
          justify-content: center;
          align-items: center;
          margin-right: 10px;
          margin-left: -150px;
        }

        .forum-title2 {
            color: #000639;
            font-size: 32px;
            font-weight: 700;
            margin-bottom: 20px;
        }

        .forum-description {
            color: #1E1E1E;
            font-size: 18px;
            position: absolute;
            top: 290px;
            left: 250px;
            text-align: left;
        }

        .login-section {
            color: #000639;
            font-size: 24px;
            position: absolute;
            top: 330px;
            margin-left: -100px;
        }

        .login-form {
            display: flex;
            flex-direction: column;
            align-items: left;
        }

        .input-field {
            width: 80%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #000639;
            border-radius: 5px;
            font-size: 16px;
        }

        .enter-button {
            background-color: #ff8a00;
            color: white;
            padding: 10px 20px;
            font-size: 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            width: 60%;
            text-align: center
        }

        .footer {
            text-align: center;
            margin-top: 40px;
        }

        .footer-link {
            margin: 0 10px;
            color: #000639;
            text-decoration: none;
            font-size: 18px;
        }

        .logo {
          margin-left: -120px;
          margin-top: -20px;
        }

        .header-container {
          justify-content: space-between;
          text-align: center;
          margin-top: 20px;
        } 

        .header-container a {
          text-decoration: none;
          color: #000639; /* Cor do texto */
          margin-left: 100px;
          height: 100px;
          width: 200px;
        }

        .parte1 {
          display: flex;
        }

        .search-bar {
          display: flex;
          align-items: center;
          text-align: center;
          padding: 10px;
          width: 90%;
          margin-left: 40px;
        }

      .search-bar input {
          width: 100%; 
          padding: 8px;
          margin-right: 5px;
          text-align: center;
        }

        .search-bar button {
          background: none;
          border: none;
          cursor: pointer;
        }

        .search-bar button img {
          width: 20px; 
          height: 20px;
        }

        .titulo3 {
          position: absolute;
          top: 270px;
          margin-left: -100px;
          font-size: 27px;
          color: #000639;
          font-weight: bold;
        }

        .input-field2 {
          width: 80%;
          padding: 10px;
          margin-bottom: 15px;
          border: 1px solid #000639;
          border-radius: 5px;
          font-size: 16px;
        }

        .forum-title2 {
          position: absolute;
          top: 230px;
          left: 420px;
          bottom: 500px;
        }

        .forgot-password {
          font-size: 15px;
          margin-top: 5px;
          color: gray;
          text-decoration: none;
        }

        .register {
          font-size: 15px;
          margin-top: 5px;
          color: gray;
          text-decoration: none;
        }

        .artigos {
          display: flex;
          flex-direction: column;
          position: absolute;
          top: 570px;
          left: 250px;
          text-decoration: none;
          color: #FF8A00;
          justify-content: space-between;
          margin-right: 10px;
        }
        
        .artigos a {
          text-decoration: none;
          color: #FF8A00;
          font-size: 20px;
          justify-content: space-between;
          margin-right: 10px;
        }

        .pasta-de-arquivo{
          width: 25px;
          height: 25px;
        }

    </style>
</head>

<body>
    <div class="container">
        <div class="header">
          <img class="logo" src="../img/LOGO.png" width="200" height="100px">
          <div class="header-container">
              <a href="/pages/page2.html" class="footer-link">CONTATO</a>
              <a href="sobrenos.php" class="footer-link">SOBRE NÓS</a>
              <a href="#" class="footer-link">PUBLICAÇÕES</a>
              <a href="#" class="footer-link">AGENDA</a>
          </div>
        </div>

        <div class="parte1">
        <div class="forum-title1">FÓRUM DE DEBATES</div>
        <div class="search-bar">
          <input type="text" class="input-field2" placeholder="Buscar">
          <button>
              <img src="/img/lupa.png" alt="Ícone de Busca">
          </button>
          </div>
        </div>

        <div class="titulo3">Acesso ao Fórum</div>

        <div class="login-section">
          <form class="login-form" method="post" action=""> Login
              <input type="text" class="input-field" placeholder="Login" name="login_usuario">
              Senha
              <input type="password" class="input-field" name="senha" placeholder="Senha">
              <button type="submit" class="enter-button" name="submit">ENTRAR</button>
          </form>
          <a href="#" class="forgot-password">Esqueci minha senha</a></br>
          <a href="cadastrar.php" class="register">Quero me cadastrar</a>
      </div>

        <div class="forum-title2">Fórum Ideias em Debate</div>

        <div class="forum-description">
            O sistema de Fórum de Discussão Ideias em Debate em sistemas de ensino seria uma plataforma online que permitiria aos alunos, professores e demais membros da comunidade universitária participarem de discussões e trocarem ideias sobre temas relacionados ao ensino.
        </br></br>Os usuários poderiam criar tópicos, postar perguntas, compartilhar recursos e responder às mensagens de outros participantes.
        </br></br>O sistema poderia ter recursos como categorização de tópicos por disciplina, pesquisa avançada, notificações por e-mail e moderação para garantir um ambiente seguro e produtivo para a interação.
        </br></br>O sistema poderia ser acessado por meio de website.
        </div>

        <div class="artigos">
          <a href="page02.php" > <img class="pasta-de-arquivo" src="/img/pasta-de-arquivo.png" alt="Ícone do Botão">Copa do Mundo 2026</a>
          <a href="#" > <img class="pasta-de-arquivo" src="/img/pasta-de-arquivo.png" alt="Ícone do Botão">Feminismo na sala de aula</a>
          <a href="#" > <img class="pasta-de-arquivo" src="/img/pasta-de-arquivo.png" alt="Ícone do Botão">Filosofia e Pandemia</a>
          <a href="#"> <img class="pasta-de-arquivo" src="/img/pasta-de-arquivo.png" alt="Ícone do Botão">Bolsas de produtividade em pesquisa do CNPq</a>

        </div>

    </div>
</body>

</html>

</html>

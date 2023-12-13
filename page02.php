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

        .copalogo {
          position: absolute;
          left: -130px;
          top: 300px;
          border-radius: 15px;
          width: 300px;
          height: 400px;
        }

    </style>
</head>

<body>
    <div class="container">
        <div class="header">
          <img class="logo" src="/img/LOGO.png" width="200" height="100px">
          <div class="header-container">
              <a href="/pages/page2.html" class="footer-link">CONTATO</a>
              <a href="#" class="footer-link">SOBRE NÓS</a>
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

        <img class="copalogo" src="/img/Logo_copa_2026.png">



        <div class="forum-title2">Copa do Mundo 2026</div>

        <div class="forum-description">
          A Copa do Mundo de 2026 está destinada a ser um marco na história do futebol, pois será a primeira vez que o torneio será co-hospedado por três países: Estados Unidos, Canadá e México. Essa colaboração internacional promete proporcionar uma experiência única aos fãs de futebol, com uma ampla diversidade cultural e geográfica.
        </br></br>
        Com estádios de última geração e infraestrutura excepcional, os três países anfitriões estão comprometidos em oferecer uma Copa do Mundo memorável. A competição não só será uma vitrine para o talento futebolístico, mas também para a unidade e cooperação entre nações.
        </br>A inclusão do Canadá como co-anfitrião destaca o alcance global do torneio, expandindo a paixão pelo futebol para além dos tradicionais bastiões do esporte. Além disso, a expectativa é de que a competição de 2026 promova uma atmosfera de celebração, conectando pessoas de diferentes origens e promovendo a compreensão intercultural.
        </br></br>Com a promessa de emocionantes confrontos e uma experiência verdadeiramente internacional, a Copa do Mundo de 2026 representa mais do que uma competição esportiva; é um símbolo de cooperação global e celebração da diversidade no coração do futebol mundial.
        </div>

    </div>
</body>

</html>

</html>

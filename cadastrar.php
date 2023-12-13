<?php

if (isset($_POST['submit'])) {
    include_once('config.php');

    // Utilize instruções preparadas para evitar SQL Injection
    $query = "INSERT INTO usuarios(nome, sobrenome, email, data_nasc, estado, cidade, login_usuario, senha) 
              VALUES (?, ?, ?, ?, ?, ?, ?, ?)";

    $stmt = $conexao->prepare($query);

    if ($stmt) {
        // Vincule os parâmetros
        $stmt->bind_param("ssssssss", $_POST['nome'], $_POST['sobrenome'], $_POST['email'], $_POST['data_nascimento'], $_POST['estado'], $_POST['cidade'], $_POST['login_usuario'], $_POST['pass']);

        // Execute a instrução preparada
        $stmt->execute();

        // Verifique se a inserção foi bem-sucedida
        if ($stmt->affected_rows > 0) {
            echo "Registro inserido com sucesso.";
        } else {
            echo "Erro ao inserir registro: " . $stmt->error;
        }

        // Feche a instrução preparada
        $stmt->close();
    } else {
        echo "Erro na preparação da consulta: " . $conexao->error;
    }

    // Feche a conexão com o banco de dados
    $conexao->close();
}

?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylo4.css">
    <title>Fórum Ideias em Debate</title>
</head>
<body>
    <div ><img class="img" src="../img/LOGO.png"></div>
    <div>
        <p class="menu1">Sobre nós</p>
        <p class="menu2">Contato</p>
        <p class="menu3">Agenda</p>
        <p class="menu4">Publicações</p>
    </div>
    <div>
        <p ><img class="icon1"src="../img/facebook.png" ></p>
        <p ><img class="icon2"src="../img/twitter.png" ></p>
        <p ><img class="icon3"src="../img/youtube.png" ></p>
        <p ><img class="icon4"src="../img/instagram.png" ></p>
        
    </div>
    <p class="barra"> </p>
<div class="meio">
    <!-- Formulario -->
    <div class="box">
        <form action="cadastrar.php" method="POST">
            <fieldset>
                <legend>Dados Pessoais</legend>
                        <table cellspacing="10">
                            <tr>
                                <td>
                                    <label for="nome" >Nome: </label>
                                </td>
                                <td>
                                    <input type="text" name="nome">
                                </td>
                                <td>
                                    <tr>
                                        <td>
                                            <label for="nome"  >Sobrenome: </label>
                                        </td>
                                        <td>
                                            <input type="text" name="sobrenome">
                                        </td>
                                        <td>
                                    </tr>
                            </tr>
                            <tr>
                                <td>
                                    <label>Nascimento: </label>
                                </td>
                                <td>
                                
                                    <input type="date" name="data_nascimento" id="data_nascimento" required>
                                </td>
                            </tr>
                            
                        </table>
            </fieldset>
<br>
<!-- ENDEREÇO -->
            <fieldset>
                <legend>Dados de Endereço</legend>
                        <table cellspacing="10">
                           
                            <tr>
                                <td>
                                    <label for="estado">Estado:</label>
                                </td>
                                <td>
                                    <select name="estado" name="estado" required> 
                                        <option value="ac">Acre</option> 
                                        <option value="al">Alagoas</option> 
                                        <option value="am">Amazonas</option> 
                                        <option value="ap">Amapá</option> 
                                        <option value="ba">Bahia</option> 
                                        <option value="ce">Ceará</option> 
                                        <option value="df">Distrito Federal</option> 
                                        <option value="es">Espírito Santo</option> 
                                        <option value="go">Goiás</option> 
                                        <option value="ma">Maranhão</option> 
                                        <option value="mt">Mato Grosso</option> 
                                        <option value="ms">Mato Grosso do Sul</option> 
                                        <option value="mg">Minas Gerais</option> 
                                        <option value="pa">Pará</option> 
                                        <option value="pb">Paraíba</option> 
                                        <option value="pr">Paraná</option> 
                                        <option value="pe">Pernambuco</option> 
                                        <option value="pi">Piauí</option> 
                                        <option value="rj">Rio de Janeiro</option> 
                                        <option value="rn">Rio Grande do Norte</option> 
                                        <option value="ro">Rondônia</option> 
                                        <option value="rs">Rio Grande do Sul</option> 
                                        <option value="rr">Roraima</option> 
                                        <option value="sc">Santa Catarina</option> 
                                        <option value="se">Sergipe</option> 
                                        <option value="sp">São Paulo</option> 
                                        <option value="to">Tocantins</option> 
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label for="cidade">Cidade: </label>
                                </td>
                                <td>
                                    <input type="text" name="cidade" required>
                                </td>
                            </tr>
                           
                        </table>
            </fieldset>
<br>

<!-- DADOS DE LOGIN -->
            <fieldset>
                <legend>Dados de login</legend>
                        <table cellspacing="10">
                            <tr>
                                <td>
                                    <label for="email">E-mail: </label>
                                </td>
                                <td>
                                    <input type="email" name="email" required>
                                </td>
                            </tr>
                            
                            <tr>
                                <td>
                                    <label for="login">Login de usuário: </label>
                                </td>
                                <td>
                                    <input type="text" name="login_usuario" required>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label for="pass">Senha: </label>
                                </td>
                                <td>
                                    <input type="password" name="pass" required>
                                </td>
                            </tr>
                     
                        </table>
            </fieldset>
<br>
    <input type="submit" name="submit" id="submit">
<br><br>
    <input type="reset" name="reset" id="reset" value="Limpar">
        </form>
    </div>
</div>    
</body>
</html>
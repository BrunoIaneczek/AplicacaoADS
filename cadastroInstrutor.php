<?php
    if(isset($_POST['submit'])) 
    {
        //Inclui arquivo para conexao com o banco de dados
        include_once('conexaoInstrutor.php');
       
       
        //Declara variáveis aos inputs
        $nome =  $_POST['nome'];
        $email= $_POST['email'];
        $telefone= $_POST['telefone'];
        $data_nascimento = $_POST['data_nascimento'];
        $sexo= $_POST['sexo'];
        
        //Inseri Dados na tabela instrutor
        $result = mysqli_query($conexao, "INSERT INTO instrutor(nome,email,telefone,data_nascimento,sexo) VALUES ( '$nome', '$email','$telefone', '$data_nascimento','$sexo')");
        
        
    }
?>  
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Academia ADS</title>
    
    <!--Scripts ajax e jquery para validação no formulário -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery.maskedinput/1.4.1/jquery.maskedinput.min.js"></script>
    
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <header>
        <a href="http://localhost/Aplicacao_ADS/homepage.html">home</a>  
    </header>
    
    <div class="box">
        <form method='post' action='cadastroInstrutor.php'>
            <fieldset>
                <legend><b>Fórmulário de Cadastro</b></legend>
                <br>
                <div class="inputBox">
                    <input type="text" name="nome" id="nome" minlength="2" maxlength="30" class="inputUser" required>
                    <label for="nome" class="labelInput">Nome completo</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="email" id="email" class="inputUser" required>
                    <label for="email" class="labelInput">Email</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="telefone" id="telefone" class="inputUser" required>
                    <label for="telefone" class="labelInput">Telefone</label>
                </div>
                <br>
                <p>Sexo:</p>
                <input type="radio" id="feminino" name="sexo" value="feminino" required>
                <label for="feminino">Feminino</label>
                
                <input type="radio" id="masculino" name="sexo" value="masculino" required>
                <label for="masculino">Masculino</label>
                <br>
                <br>
                <label for="data_nascimento"><b>Data de Nascimento:</b></label> 
                <br><br>
                <input type="date"  name="data_nascimento" min="1900-01-01" max="2023-01-01" id="data_nascimento" 
                required>
                <br><br>    
                <input type="submit" name="submit" id="submit">
            </fieldset>
        </form>
    </div>
    <!--Script para validar campo de inserção do telefone-->
    <script>
        $("#telefone").mask("(99)99999-9999")
    </script>
</body>
</html
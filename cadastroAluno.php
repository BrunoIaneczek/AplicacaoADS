
<?php
    if(isset($_POST['submit'])) 
    {
        //Inclui arquivo para conexao com o banco de dados
        include_once('conexaoAluno.php');
       
       
        //Declara variáveis aos inputs
        $nome =  $_POST['nome'];
        $email= $_POST['email'];
        $telefone= $_POST['telefone'];
        $data_nascimento = $_POST['data_nascimento'];
        $sexo = $_POST['sexo'];
        $peso = $_POST['peso'];
        $altura = $_POST['altura'];
        $imc=$peso/pow($altura,2);
        $imcF=number_format($imc,2);
        
        //Inseri Dados na tabela aluno
        $result = mysqli_query($conexao, "INSERT INTO aluno(nome,email,telefone,data_nascimento,sexo,peso,altura) VALUES ( '$nome', '$email','$telefone', '$data_nascimento','$sexo','$peso','$altura')");

        //Inseri dados na tabela exfisico
        $resultImc = mysqli_query($conexao,"INSERT INTO exfisico(IMC) VALUES('$imcF')");
        
        
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
    <div class="container">
        <div class="imc">
            <h1>IMC</h1>
            <p>índice de massa corporal</p>
            <p id="resultado"></p>
        </div>  
        <div class="box">
            <form id="form" method="post" action="cadastroAluno.php">
                <fieldset>
                    <legend><b>Fórmulário de Cadastro</b></legend>
                    <br>
                    <div class="inputBox">
                        <input type="text" name="nome" id="nome" minlength="2" maxlength="30" class="inputUser" required>
                        <label for="nome" class="labelInput">Nome completo</label>
                    </div>
                    <br><br>
                    <div class="inputBox">
                        <input type="email" name="email" id="email" class="inputUser" required>
                        <label for="email" class="labelInput">Email</label>
                    </div>
                    <br><br>
                    <div class="inputBox">
                        <input type="text" name="telefone" id="telefone" class="inputUser" required>
                        <label for="telefone" class="labelInput">Telefone</label>
                    </div>
                    <br>
                    <div class="inputBox">
                        <label for="peso" >Peso</label>
                        <input type="text" maxlength="4" name="peso" id="peso" placeholder="Ex:89kg" class="inputUserImc" required>
                        
                    </div>
                    <br>
                    <div class="inputBox">
                        <label for="altura" >Altura</label>
                        <input type="text" maxlength="4" name="altura" placeholder="Ex:1.87" id="altura" class="inputUserImc" required>
                        
                    </div>
                    <br>
                    <button id="imcbotao" onclick="calculaImc()"> Clique aqui e confira seu IMC </button>
                    <p>Sexo:</p>
                    <input type="radio" id="feminino" name="sexo" value="feminino" required>
                    <label for="feminino">Feminino</label>
                    
                    <input type="radio" id="masculino" name="sexo" value="masculino" required>
                    <label for="masculino">Masculino</label>
                    <br>
                    <br>
                    <label for="data_nascimento"><b>Data de Nascimento:</b></label>
                        
                    <input type="date"  name="data_nascimento" min="1900-01-01" max="2023-01-01" id="data_nascimento" 
                    required>
                    <br><br>
                    <input type="submit" name="submit" id="submit">
                </fieldset>
            </form>
        </div>
    </div>
<script src="funcionalidades.js"></script>
<!--Script para validar campo de inserção do telefone-->
<script>
    $("#telefone").mask("(99)99999-9999")
</script>
</body>
</html

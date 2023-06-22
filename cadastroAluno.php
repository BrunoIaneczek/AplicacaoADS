
<?php
    if(isset($_POST['submit'])) 
    {
        include_once('conexao.php');
       
       

        $nome =  $_POST['nome'];
        $email= $_POST['email'];
        $telefone= $_POST['telefone'];
        $data_nascimento = $_POST['data_nascimento'];
        $sexo = $_POST['sexo'];
        $peso = $_POST['peso'];
        $altura = $_POST['altura'];
        
        $result = mysqli_query($conexao, "INSERT INTO aluno(nome,email,telefone,data_nascimento,sexo,peso,altura) VALUES ( '$nome', '$email','$telefone', '$data_nascimento','$sexo','$peso','$altura')");
        
        
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Academia ADS</title>
   <link rel="stylesheet" href="estilo.php">
</head>
<body>
    <header>
        <a href="http://localhost/Aplicacao_ADS/homepage.html">home</a>
    </header>
    <div class="box">
        <form method="post" action="cadastroAluno.php">
            <fieldset>
                <legend><b>Fórmulário de Cadastro</b></legend>
                <br>
                <div class="inputBox">
                    <input type="text" name="nome" id="nome" class="inputUser" required>
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
                <br><br>
                <div class="inputBox">
                    <input type="number" name="peso" id="peso" class="inputUser" required>
                    <label for="peso" class="labelInput">peso</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="number" name="altura" id="altura" class="inputUser" required>
                    <label for="altura" class="labelInput">altura</label>
                </div>
                <p>Aluno ou instrutor:</p>
                <input type="radio" id="aluno" name="posicao" value="aluno" required>
                <label for="aluno">Aluno</label> 
                
                <input type="radio" id="instrutor" name="posicao" value="instrutor" 
                required>
                <label for="instrutor">Instrutor</label>
                <p>Sexo:</p>
                <input type="radio" id="feminino" name="sexo" value="feminino" required>
                <label for="feminino">Feminino</label>
                
                <input type="radio" id="masculino" name="sexo" value="masculino" required>
                <label for="masculino">Masculino</label>
                <br>
                <br>
                <label for="data_nascimento"><b>Data de Nascimento:</b></label>
                    
                <input type="date" name="data_nascimento" id="data_nascimento" 
                required>
                <br><br>
                <input type="submit" name="submit" id="submit">
            </fieldset>
        </form>
    </div>
</body>
</html

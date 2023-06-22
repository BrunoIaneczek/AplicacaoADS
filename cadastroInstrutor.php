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
        <form >
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
                <input type="date" name="data_nascimento" id="data_nascimento" 
                required>
                <br><br>    
                <input type="submit" name="submit" id="submit">
            </fieldset>
        </form>
    </div>
</body>
</html
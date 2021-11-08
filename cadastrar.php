



<!DOCTYPE html>
<html lang="BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"  href="styles.css"/>
    <title>PIZZARIA BOMGOSTO</title>
</head>
<body>
    <div id="container">
        <div id="formulario" >
    <h1> Cadastro de clientes </h1>

    <h3>Preencha os campos: </h3> 
    
    <form action="processar.php" name="cad_cliente" metod="GET">

    <label for="">ID: </label>
    <input type="text" name="id" id="id" placeholder="seu id" ><br><br>


    <label for="">Nome: </label>
    <input type="text" name="nome" id="nome" placeholder="nome completo" ><br><br>

    <label for="">E-mail: </label>
    <input type="email" name="email" id="email" placeholder="seu e-mail" ><br><br>


    <label for="">Endereço: </label>
    <input type="text" name="endereco" id="endereco" placeholder="seu endereço" ><br><br>


    <label for="">Cep: </label>
    <input type="text" name="cep" id="cep" placeholder="seu cep" ><br><br>

    <label for="">Contato: </label>
    <input type="text" name="contato" id="contato" placeholder="seu contato" ><br><br>

    
    

    <input type="submit" value="cadastrar">

    </form>
        <div>
    <div>
</body>
</html>
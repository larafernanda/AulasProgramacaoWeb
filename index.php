<!DOCTYPE html>
<html>  
    <head>
    <meta charset="utf-8">
    <title> Example Method Post/Get </title>
</head>
<body>
    <form name="cadastro" action="cadastro.php" method="post">
        <div>
            <label> Nome: </label>
            <input type="text" name="nome" id="nome" />
        </div>

        <div>
            <label> E-mail: </label>
            <input type="text" name="email" id="email" />
        </div>

        <div>
            <label> Senha: </label>
            <input type="password" name="senha" id="senha" />
        </div>

        <div>
            <label> Observação: </label>
            <textarea name="observacao" id="observacao"> </textarea>
        </div>

        <div>
           <input id="btEnviar" type="submit" value="Cadastrar" />
        </div>



    </form>
</body>


</html>
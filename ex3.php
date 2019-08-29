<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Formulário de Carros</title>
</head>
<body>
    <form action="ex3insert.php" method="post">
        <table>
            <tr>
                <td colspan="2"><h2>Dê as informações sobre seu carro:</h2></td>
            </tr>

            <tr>
                <td><p>Digite o fabricante/marca do seu carro:</p></td>
                <td><input type="text" name="fabricante" size="30" maxlength="30" /></td>
            </tr>

            <tr>
                <td><p>Digite o ano de fabricação do seu carro:</p></td>
                <td><input type="text" name="ano_fabricacao" size="30" maxlength="30" /></td>
            </tr>

            <tr>
                <td><p>Digite o total de quilômetros rodados do seu carro:</p></td>
                <td><input type="text" name="quilometragem" size="30" maxlength="30" /></td>
            </tr>

            <tr>
                <td></td>
                <td><input type="submit" name="submit" value="Enviar" /></td>
            </tr>
        </table>
    </form>        
</body>
</html>
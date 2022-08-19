<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    echo $_POST['pnumero'].'<br>';
    echo $_POST['snumero'].'<br>';
    echo $_POST['Operacion'];
    /*--------------------------------------------------
    CAPTURA DE LOS DATOS EN UNA VARIABLE LOCAL
    ----------------------------------------------------*/
    $num1 = $_POST['pnumero'];
    $num2= $_POST['snumero'];
    $operacion = $_POST['Operacion'];

    /*---------------------------------------------------
    VERIFICAR QUE OPERACION SE SELECCIONÓ Y DEPENDIENDE ESTO, MOSTRAMOS EL RESULTADO
    ---------------------------------------------------------------------------------*/
    if($operacion=="Suma")
    {
        echo "LA SUMA DE LOS NUMEROS ES:----". ($num1 + $num2);
    }

    ?>
</body>
</html>
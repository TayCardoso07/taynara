<html>
    <head>
        <meta utf="utf8_decode">
        <title> Calculadora Simples </title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <h1> Calculadora Simples </h1>
        <form method="GET" action="/aula1911/calc/" class="p2"> 
            <label for="num1">Num1:</label><br>
            <input type="text" name="n1"><br>
            <label for="num2">Num2:</label><br>
            <input type="text" name="n2"><br>
            <input type="submit" value="Calcular">
            <fieldset style="margin-right: 1000;">                
                <legend>Operações</legend>
                <input type="radio" name="op" value="soma" checked>Soma</input><br>
                <input type="radio" name="op" value="subtração">Subtração</input>
                <input type="radio" name="op" value="multiplicação">Multiplicação</input>
                <input type="radio" name="op" value="divisão">Divisão</input>
            </fieldset>
        </form>
        <?php

            if($_SERVER['REQUEST_METHOD'] == 'GET'){
                if(isset($_GET['n1']) and isset($_GET['n2'])){
                    $n1 = $_GET['n1'];
                    $n2 = $_GET['n2'];
        
            
                    function soma(){
                        return $GLOBALS['n1'] + $GLOBALS['n2'];
                    }

                    function subtracao(){
                        return $GLOBALS['n1'] - $GLOBALS['n2'];
                    }
                    function multiplicação(){
                        return $GLOBALS['n1'] * $GLOBALS['n2'];
                    }

                    function divisão(){
                        return $GLOBALS['n1'] / $GLOBALS['n2'];
                    }


                    if($_GET['op'] == 'soma'){
                        echo "<h1> $n1  + $n2 = " .soma(). "</h1>";
                    } else if($_GET['op'] == 'subtração') {
                        echo "<h1> $n1 - $n2 = " .subtracao(). "</h1>";
                    }else if ($_GET['op'] == 'multiplicação'){
                    echo "<h1> $n1  * $n2 = " .multiplicação(). "</h1>";
                    } else if($_GET['op'] == 'divisão') {
                        echo "<h1> $n1 / $n2 = " .divisão(). "</h1>";
                    }
                }
            }

        ?>
    </body>
</html>
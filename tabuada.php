<?php

function obterTabuada()
{

    $limite = filter_input(INPUT_POST, "limite", FILTER_VALIDATE_INT);
    $operacoes = $_POST['operacao'];
    $numero1 = rand(0, $limite);
    $operacao = $operacoes[rand(0, sizeof($operacoes) - 1)];

    if ($operacao == "+") {
        $numero2 = rand(0, $limite);
    } else if ($operacao == "-") {
        $numero2 = rand(0, $numero1);
    } else if ($operacao == "/") {
        $numero2 = rand(1, $limite);
        $operacao = '&divide;';
        $numero1 = ($numero2 * rand(1, $limite));
    } else if ($operacao == "*") {
        $operacao = 'x';
        $numero2 = rand(0, 10);
    }

    return sprintf("%s %s %s =", $numero1, $operacao, $numero2);
}

function imprimirValoresForm()
{
    $limite = filter_input(INPUT_POST, "limite", FILTER_VALIDATE_INT);
    $operacoes = $_POST['operacao'];
    foreach ($operacoes as $operacao) {
        echo "<input type='hidden' id='operacao[]' name='operacao[]' value='" .  $operacao . "' />";
    }

    echo "<input type='hidden' id='limite' name='limite' value='" .  $limite . "' />";
}

?>

<html>

<head>
    <title>Show da Tabuada</title>
    <link href="css/bulma.min.css" type="text/css" rel="stylesheet" />
    <link href="css/theme.min.css" type="text/css" rel="stylesheet" />
</head>

<body>
    <section class="hero is-info is-fullheight">
        <div class="hero-body">
            <div class="container has-text-centered">
                <div class="operacao">
                    <p class="title">
                        Operação
                    </p>
                    <p class="subtitle operacao">
                        <?php
                        echo obterTabuada();
                        ?>
                    </p>
                </div>
            </div>
        </div>
        <div class="container has-text-centered">
        <form action="tabuada.php" method="post" name="dados" id="dados">
            <?php imprimirValoresForm(); ?>
            <input class='button' type="submit" id="ir" name="ir" value="Outra Operação" />
            <input class='button' type="button" id="home" name="home" value="Página Inicial"
                onclick="window.location = '.'" />
        </form>
    </div>
    </section>
</body>

</html>
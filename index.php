<html>

<head>
    <title>Show da Tabuada</title>
    <link href="css/bulma.min.css" type="text/css" rel="stylesheet" />
    <link href="css/theme.min.css" type="text/css" rel="stylesheet" />
</head>
</head>

<body>
    <section class="hero is-info is-fullheight">
        <div class="hero-body">
            <div class="container has-text-centered">
                <div class="">
                    <p class="title">
                        Show da Tabuada
                    </p>
                    <p class="subtitle">
                    <form action="tabuada.php" method="post" name="dados" id="dados">
                        <fieldset>
                            <h2>Escolha as operações</h2>
                            <input type="checkbox" name="operacao[]" id="operacao[]" value="+" />Adição
                            <input type="checkbox" name="operacao[]" id="operacao[]" value="-" />Subtração
                            <input type="checkbox" name="operacao[]" id="operacao[]" value="*" />Multiplicação
                            <input type="checkbox" name="operacao[]" id="operacao[]" value="/" />Divisão
                            <br /><br />
                            <h2>Números até</h2>
                            <input type="text" id="limite" name="limite" value="9" />
                            <br /><br />
                            <input class='button' type="submit" id="ir" name="ir" value="Começar" />
                        </fieldset>
                    </form>
                    </p>
                </div>
            </div>
        </div>
    </section>
</body>

</html>
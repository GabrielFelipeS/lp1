<?php include '../inc/cabecalho.php'; ?>
<?php include '../component/jumbotron.php'; ?>
    </head>
    <body>

        <div class="">
            <?= jumbotron_fluido(['titulo' => 'LP I - 2023/1', 'subtitulo' => 'Insira seu usuário e senha para entrar']) ?>

            <div class="row">
                <div class="col-md-4 col-sm-6 col-xs-9 mx-auto ">
                    <form class="text-center border border-light p-5" method="POST" action="http://localhost/lp12/aula03/home.php">
                        <input type="email" id="email" name="email" class="form-control mb-4" placeholder="E-mail">
                        <input type="password" id="senha" name="senha" class="form-control" placeholder="Password" aria-describedby="dica_senha">
                        <button class="btn btn-info my-4 btn-block" type="submit">Cadastrar</button>
                    </form>
                </div>
            </div>
            
        </div>
        <?php include '../inc/rodape.php' ?>;
    </body>
</html>

<?php include '../inc/cabecalho.php'; ?>
<?php include '../component/jumbotron.php'; ?>
    </head>
    <body>

        <?= jumbotron_fluido(['titulo' => 'LP I - 2023/1', 'subtitulo' => 'Postando dados de forma discreta!']) ?>

        <form class="text-center border border-light p-5" method="POST" action="http://localhost/lp12/aula03/display.php">
            <div class="form-row mb-4">
                <div class="col">
                    <input type="text" id="nome" name="nome" class="form-control" placeholder="Nome">
                </div>
                <div class="col">
                    <input type="text" id="snome" name="snome" class="form-control" placeholder="Sobrenome">
                </div>
            </div>

            <input type="email" id="email" name="email" class="form-control mb-4" placeholder="E-mail">
            <input type="password" id="senha" name="senha" class="form-control" placeholder="Password" aria-describedby="dica_senha">
            <small id="dica_senha" class="form-text text-muted mb-4">Use pelo menos 8 caracteres.</small>
            <input type="text" id="telefone" name="telefone" class="form-control" placeholder="Telefone" aria-describedby="dica_telefone">
            <small id="dica_telefone" class="form-text text-muted mb-4">Telefone com DDD</small>

            <div class="form-group purple-border">
                <label for="texto">Deixe aqui a sua mensagem de paz!</label>
                <textarea class="form-control" id="texto" name="texto" rows="3"></textarea>
            </div>

            <button class="btn btn-info my-4 btn-block" type="submit">Cadastrar</button>
        </form>

        <?php include '../inc/rodape.php' ?>;
    </body>
</html>

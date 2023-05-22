<?php include '../inc/cabecalho.php'; ?>
<?php include '../component/jumbotron.php'; ?>
    </head>
    <body>

        <?= jumbotron_fluido(['titulo' => 'Inspeção Veicular', 'subtitulo' => 'Cadastre seu veículo para ser atendido']) ?>

        <form class="text-center border border-light p-5" method="POST" action="http://localhost/lp12/aula04/registro.php">
            <div class="form-row mb-4">
                <div class="col">
                    <input type="text" id="marca" name="marca" class="form-control" placeholder="Marca">
                </div>
                <div class="col">
                    <input type="text" id="modelo" name="modelo" class="form-control" placeholder="Modelo">
                </div>
            </div>

            <div class="form-row">
                <div class="col-sm-6">
                    <input type="placa" id="placa" name="placa" class="form-control mb-4" placeholder="Placa">
                </div>
                <div class="col-sm-6">
                    <input type="ano" id="ano" name="ano" class="form-control mb-4" placeholder="Ano">
                </div>
            </div>

            <div class="form-row">
                <div class="col-sm-6">
                    <input type="text" id="telefone" name="telefone" class="form-control" placeholder="Telefone com DDD" aria-describedby="dica_telefone">
                </div>
                <div class="col-sm-6">
                    <input type="email" id="email" name="email" class="form-control mb-4" placeholder="E-mail">
                </div>
            </div>

            <div class="form-group purple-border">
                <label for="texto">Observações</label>
                <textarea class="form-control" id="obs" name="obs" rows="3"></textarea>
            </div>

            <button class="btn btn-info my-4 btn-block" type="submit">Cadastrar</button>
        </form>

        <?php include '../inc/rodape.php' ?>;
    </body>
</html>

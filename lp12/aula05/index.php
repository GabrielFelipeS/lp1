<?php include '../inc/cabecalho.php'; ?>
<?php include '../component/jumbotron.php'; ?>
    </head>
    <body>

        <?= jumbotron_fluido(['titulo' => 'Controle Financeiro', 'subtitulo' => 'Mantenha suas contas em dia e guarde aqui os comprovantes de pagamento']) ?>

        <form class="text-center border border-light p-5" method="POST" action="http://localhost/lp12/aula05/upload.php" enctype="multipart/form-data">
            <div class="form-row mb-4">
                <div class="col">
                    <input type="text" id="titulo" name="titulo" class="form-control" placeholder="Título">
                </div>
                <div class="col">
                    <input type="number" step="0.01" min="0" id="valor" name="valor" class="form-control" placeholder="Valor (R$)">
                </div>
            </div>

            <div class="form-row">
                <div class="col-sm-6">
                    <input type="text" id="descricao" name="descricao" class="form-control mb-4" placeholder="Descrição">
                </div>
                <div class="col-sm-6">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroupFileAddon01">Comprovante</span>
                        </div>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="comprovante" name="comprovante">
                            <label class="custom-file-label" for="comprovante">Selecione o arquivo</label>
                        </div>
                    </div>                    
                </div>
            </div>

            <button class="btn btn-info my-4 btn-block" type="submit">Cadastrar</button>
        </form>

        <?php include '../inc/rodape.php' ?>;
    </body>
</html>

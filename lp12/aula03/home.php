<?php  
    include '../lib/form_data.php';
    verificaLogin();
    
    include '../inc/cabecalho.php';
    include '../component/jumbotron.php';
?>
</head>
<body>

    <div class="container">
        <?= jumbotron_fluido(['titulo' => 'LP I - 2023/1', 'subtitulo' => 'Olá Maria, seja bem-vinda!']) ?>
    </div>

    <a class="mx-auto" href="userdata.php">Ver dados do usuário</a>
</body>

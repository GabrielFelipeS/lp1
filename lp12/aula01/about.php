    <?php include '../inc/cabecalho.php'; ?>
    <link rel="stylesheet" href="../assets/css/about.css">
</head>
<body>
    <header>
        <?php include '../inc/navbar.php'; ?>
        <div id="home" class="view jarallax" data-jarallax='{"speed": 0.2}' style="background-image: url(https://mdbootstrap.com/img/Photos/Others/img%20%2853%29.jpg); background-repeat: no-repeat; background-size: cover; background-position: center center;">
          <div class="mask rgba-stylish-light">
            <div class="container h-100 d-flex justify-content-center align-items-center">
                <div class="row pt-5 mt-3">
                    <div class="col-md-12 mb-3">
                        <div class="intro-info-content text-center">
                            <h1 class="display-3 white-text mb-5 wow fadeInDown" data-wow-delay="0.3s">ABOUT <a class="white-text font-weight-bold">US</a></h1>
                            <h5 class="text-uppercase white-text mb-5 mt-1 font-weight-bold wow fadeInDown" data-wow-delay="0.3s">Lorem ipsum dolor sit amet consectetur. </h5>
                            <a class="btn btn-light-blue btn-lg wow fadeInDown" data-wow-delay="0.3s">portfolio</a>
                            <a class="btn btn-indigo btn-lg wow fadeInDown" data-wow-delay="0.3s">About</a>
                        </div>
                    </div>
                </div>
            </div>
          </div>
        </div>
    </header>
    <main>
        <div class="container">
            <?php include '../inc/team.php'; ?> <hr class="my-5">
            <?php include '../inc/features.php'; ?> <hr class="my-5">
            <?php include '../inc/gallery.php'; ?> <hr class="my-5">
            <?php include '../inc/contact.php'; ?>
        </div>
    </main>

    <?php include '../inc/footer.php' ?>;
    <?php include '../inc/rodape.php' ?>;
    <script type="text/javascript" src="../assets/js/about.js"></script>
</body>
</html>
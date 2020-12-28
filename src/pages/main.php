<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="<?= $this->metaName; ?>" content="<?= $this->metaContent; ?>">
    <link rel="shortcut icon" type="image/png" href="./src/public/img/favicon.ico"/>
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= $this->title; ?></title>
    <link rel="stylesheet" href="./src/public/css/main.style.css">
    <?php include "./src/pages/template/script.php"; ?>
</head>

<body>

<div class="view lighten-3">
    <div class="mask ">
        <div id="body" class="container h-100">
            <div class="row align-items-center h-100">
                <div class="rgba-black-light col-md-12 text-center">

                    <!-- Titre du site / nom -->
                    <h1 class="massEffect font-weight-bold">Emmanuelle <span class="txt">GOUGELET</span></h1>
                    <!-- devweb -->
                    <h2 class="font-weight-bold">Développeuse Web Junior</h2>

                    <!-- direction -->
                    <div>

                        <a class="btn aqua-gradient waves-effect" href="?view=about">
                            Un petit bout de moi <i class="far fa-laugh"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>


</body>
</html>

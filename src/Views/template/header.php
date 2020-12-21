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
    <?php include_once "./src/Views/template/script.php"; ?>
</head>
<body>
<header>
    <?php include_once "./src/Views/template/navbar.php"; ?>
</header>

<div class="container">

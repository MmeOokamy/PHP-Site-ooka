<section class="erebe team-section text-center dark-grey-text">

    <h1 class="font-weight-bold mb-4 pb-2">
        <?= $title; ?>
    </h1>
    <div class="row row-cols-1 row-cols-md-4">

    <?php foreach ($movies as $movie): ?>
        <div class="col mb-4">
            <div class="card">
                <img src="<?= $movie->getMovieUrl(); ?>" class="card-img-top" alt="<?= $movie->getMovieName();?>">
                <div class="card-body">
                    <h5 class="card-title"><?= $movie->getMovieName(); ?></h5>
                    <h6 class="card-title"><?= $movie->getMovieDate(); ?></h6>
                    <a href="?page=movie&id=<?= $movie->getId(); ?>">plus de detail</a>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
    </div>
</section>
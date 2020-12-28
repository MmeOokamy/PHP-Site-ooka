<section class="erebe team-section text-center dark-grey-text">
    <h1 class=""><i class="fas fa-list"></i> Ma ToDo List <i class="fas fa-code"></i></h1>
    <hr class="w-header my-4 text-center">
    <h1><?= $title; ?></h1>


    <ul>
        <?php foreach ($devs as $dev): ?>
            <li>
                <?= $dev['dev_description'] ?>
            </li>
        <?php endforeach; ?>
    </ul>
</section>

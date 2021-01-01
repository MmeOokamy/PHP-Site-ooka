
    <section class="erebe team-section text-center dark-grey-text">
        <ul>
            <?php foreach ($devs as $dev): ?>
                <li> <?= $dev->getDevDescription(); ?></li>
            <?php endforeach;?>

        </ul>
    </section>
    <section class="erebe team-section text-center dark-grey-text">

        <?php var_dump($_POST); ?>

        <?php if (isset($alerteMessage)) {
            echo $alerteMessage;
        }
        ?>
        <form action="" method="post">
            <div class="form-group mt-5">
                <label for="dev_description">Tâche a accomplir</label>
                <input class="input is-primary" name="dev_description" id="dev_description" type="text" placeholder="category"
                       required>
            </div>
            <div class="mt-5 ">
                <input type="hidden">
                <button type="submit" class="button is-primary is-normal is-outlined">Ajouter</button>
            </div>

        </form>
    </section>

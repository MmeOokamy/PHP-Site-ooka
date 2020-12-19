<?php include './src/views/template/header.php'; ?>
    <section class="erebe team-section text-center dark-grey-text">
        <ul>
            <?php foreach ($this->list as $todo): ?>
                <li>
                    <?= $todo['todo_name'] ?>
                </li>
            <?php endforeach; ?>

        </ul>
    </section>
    <section class="erebe team-section text-center dark-grey-text">

        <?php if(isset($alerte)){
            echo $alerte;
        }
        ?>
        <form action="?view=addList" method="post">
            <div class="form-group mt-5">
                <label for="name">Tâche a accomplir</label>
                <input class="input is-primary" name="name" id="name" type="text" placeholder="category"
                       required>
            </div>
            <div class="mt-5 ">
                <input type="hidden">
                <button type="submit" class="button is-primary is-normal is-outlined">Ajouter</button>
            </div>

        </form>
    </section>
<?php include './src/views/template/footer.php';?>
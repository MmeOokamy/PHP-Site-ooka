<?php include './src/views/template/header.php'; ?>

    <section class="erebe team-section text-center dark-grey-text">
        <h1 class=""><i class="fas fa-list"></i>Ma ToDo List<i class="fas fa-code"></i> </h1>
        <hr class="w-header my-4 text-center">
<ul>
        <?php foreach ($this->list as $todo): ?>
           <li>
            <?= $todo['todo_name'] ?>
           </li>
        <?php endforeach; ?>

    </ul>
    </section>
<?php include './src/views/template/footer.php';?>
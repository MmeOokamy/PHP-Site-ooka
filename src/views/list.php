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
<?php include './src/views/template/footer.php';?>
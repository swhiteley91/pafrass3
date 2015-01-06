<p><a href="patterns/create">Add a new pattern</a></p>
<?php foreach ($patterns as $purpose_item): ?>

    <h2><?php echo $purpose_item['name'] ?></h2>
    <div class="main">
        <?php echo $purpose_item['name'] ?>
    </div>
    <p><a href="patterns/<?php echo $purpose_item['id'] ?>">View pattern</a></p>

<?php endforeach ?>
<?php 
    if(count($patterns) == 0) {
        echo "<p>There are no patterns yet!</p>";
    }
?>
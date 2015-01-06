<p><a href="patterns/create">Add a new pattern</a></p>
<?php foreach ($patterns as $pattern_item): ?>

    <h2><?php echo $pattern_item['name'] ?></h2>
    <div class="main">
        <?php echo $pattern_item['name'] ?>
    </div>
    <p><a href="patterns/<?php echo $pattern_item['id'] ?>">View article</a></p>

<?php endforeach ?>
<?php 
    if(count($patterns) == 0) {
        echo "<p>There are no patterns yet!</p>";
    }
?>
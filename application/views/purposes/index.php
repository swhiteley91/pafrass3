<p><a href="purposes/create">Add a new purpose</a></p>
<?php foreach ($purposes as $purpose_item): ?>

    <h2><?php echo $purpose_item['name'] ?></h2>
    <div class="main">
        <?php echo $purpose_item['name'] ?>
    </div>
    <p><a href="purposes/<?php echo $purpose_item['id'] ?>">View purpose</a></p>

<?php endforeach ?>
<?php 
    if(count($purposes) == 0) {
        echo "<p>There are no purposes yet!</p>";
    }
?>
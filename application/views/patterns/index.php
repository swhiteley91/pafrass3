<p><a href="..">Back to home</a></p>
<p><a href="patterns/create">Add a new pattern</a></p>
<ol>
<?php foreach ($patterns as $purpose_item): ?>

    <li><h3><?php echo $purpose_item['name'] ?> - <a href="patterns/<?php echo $purpose_item['id'] ?>">View pattern</a></h3></li>

<?php endforeach ?>
</ol>
<?php 
    if(count($patterns) == 0) {
        echo "<p>There are no patterns yet!</p>";
    }
?>
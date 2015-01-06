<p><a href="..">Back to home</a></p>
<p><a href="purposes/create">Add a new purpose</a></p>
<ul>
<?php foreach ($purposes as $purpose_item): ?>

    <li><h3><?php echo $purpose_item['name'] ?> - <a href="purposes/<?php echo $purpose_item['id'] ?>">View purpose</a></h3></li>

<?php endforeach ?>
</ul>
<?php 
    if(count($purposes) == 0) {
        echo "<p>There are no purposes yet!</p>";
    }
?>
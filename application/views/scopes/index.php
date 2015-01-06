<p><a href="..">Back to home</a></p>
<p><a href="scopes/create">Add a new scope</a></p>
<ul>
<?php foreach ($scopes as $scope_item): ?>

    <li><h3><?php echo $scope_item['name'] ?> - <a href="scopes/<?php echo $scope_item['id'] ?>">View scope</a></h3></li>

<?php endforeach ?>
</ul>
<?php 
    if(count($scopes) == 0) {
        echo "<p>There are no scopes yet!</p>";
    }
?>
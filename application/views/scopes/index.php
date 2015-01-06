<p><a href="scopes/create">Add a new scope</a></p>
<?php foreach ($scopes as $scope_item): ?>

    <h2><?php echo $scope_item['name'] ?></h2>
    <div class="main">
        <?php echo $scope_item['name'] ?>
    </div>
    <p><a href="purposes/<?php echo $scope_item['id'] ?>">View scope</a></p>

<?php endforeach ?>
<?php 
    if(count($scopes) == 0) {
        echo "<p>There are no scopes yet!</p>";
    }
?>
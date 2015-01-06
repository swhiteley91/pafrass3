<p><a href="../scopes">Go back to scopes</a></p>
<?php

echo '<h2>' . $scope_item['name'] . '</h2>';
echo '<b>Name: </b>' . $scope_item['name'] . '</br>';
echo '<b>Description: </b>' . $scope_item['description'] . '</br>';
if(isset($parent)) {
echo '<b>Parent: </b><a href="../scopes/' . $parent['id'] . '">' . $parent['name'] . '</a></br></br>';
} else
{
echo '<b>Parent: </b> none</br></br>'; 
}



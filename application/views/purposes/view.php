<p><a href="../purposes">Go back to purposes</a></p>
<?php

echo '<h2>' . $purpose_item['name'] . '</h2>';
echo '<b>Name: </b>' . $purpose_item['name'] . '</br>';
echo '<b>Description: </b>' . $purpose_item['description'] . '</br>';
if(isset($parent)) {
echo '<b>Parent: </b><a href="../purposes/' . $parent['id'] . '">' . $parent['name'] . '</a></br></br>';
} else
{
echo '<b>Parent: </b> none</br></br>'; 
}

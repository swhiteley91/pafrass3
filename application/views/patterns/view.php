<p><a href="../patterns">Go back to patterns</a></p>
<?php

echo '<h2>' . $pattern_item['name'] . '</h2>';
echo '<b>Name: </b>' . $pattern_item['name'] . '</br>';
echo '<b>Description: </b>' . $pattern_item['description'] . '</br>';
echo '<b>Problem: </b>' . $pattern_item['problem'] . '</br>';
echo '<b>Solution: </b>' . $pattern_item['problem'] . '</br>';
echo '<b>Consequences: </b>' . $pattern_item['problem'] . '</br>';
echo '<b>Parent scope: </b><a href="../scopes/' . $parentScope['id'] . '">' . $parentScope['name'] . '</a></br>';
echo '<b>Parent purpose: </b><a href="../purposes/' . $parentPurpose['id'] . '">' . $parentPurpose['name'] . '</a></br></br>';
<p><a href="/demoAppPatterns/index.php">Back to home</a></p>
<h2>Pattern finder</h2>
<p>Please pick a purpose and a scope</p>
<?php echo form_open('finder/index', array('method' => 'get')); ?>
<label for="scope">Scope</label>
<select name="scope">
    <?php foreach ($scopes as $scopes_item): ?>
        <option value="<?php
        echo $scopes_item['id'] . '"';
        if ($selectedscope == $scopes_item['id']) {
            echo 'selected="selected"';
        }
        ?>><?php echo $scopes_item['name']; ?></option>
            <?php endforeach ?>  
            </select><br/>
            <label for="title">Purpose</label>
    <select name="purpose">
        <?php foreach ($purposes as $purpose_item): ?>
            <option value="<?php
            echo $purpose_item['id'] . '"';
            if ($selectedpurpose == $purpose_item['id']) {
                echo 'selected="selected"';
            }
            ?>><?php echo $purpose_item['name']; ?></option>
                <?php endforeach ?>  
                </select>
                <p><button type="submit">Go and look!</button></p>
            </form>
            </br></br>
<?php
if(isset($results)) {
    foreach($results as $result) { ?>
          <li><h3><?php echo $result['problem'] ?> - <a href="/demoAppPatterns/index.php/patterns/<?php echo $result['id'] ?>">View pattern</a></h3></li>
    <?php }
}
?>